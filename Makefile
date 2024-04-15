version = $(shell git describe --tags --dirty --always)
build_name = application-$(version)
# use the rest as arguments for "run"
RUN_ARGS := $(wordlist 2,$(words $(MAKECMDGOALS)),$(MAKECMDGOALS))
# ...and turn them into do-nothing targets
#$(eval $(RUN_ARGS):;@:)

.PHONY: fix-permission
fix-permission: ## fix permission for docker env
	echo chown -R $(shell whoami):$(shell whoami) *
	echo chown -R $(shell whoami):$(shell whoami) .docker/*

.PHONY: build
build: ## build environment and initialize composer and project dependencies
	docker-compose build
	make composer-install

.PHONY: stop
stop:
	docker-compose stop

.PHONY: composer-install
composer-install: ## Install project dependencies
	docker-compose run --rm --no-deps php sh -lc 'composer install'

.PHONY: composer-update
composer-update: ## Update project dependencies
	docker-compose run --rm --no-deps php sh -lc 'composer update'

.PHONY: composer-outdated
composer-outdated: ## Show outdated project dependencies
	docker-compose run --rm --no-deps php sh -lc 'composer outdated'

.PHONY: composer-validate
composer-validate: ## Validate composer config
	    docker-compose run --rm --no-deps php sh -lc 'composer validate --no-check-publish'

.PHONY: composer
composer: ## Execute composer command
	docker-compose run --rm --no-deps php sh -lc "composer $(RUN_ARGS)"

.PHONY: phpunit
phpunit: ## execute project unit tests
	docker-compose run --rm --no-deps php sh -lc  "./vendor/bin/phpunit $(conf)"

.PHONY: phpstan
phpstan: ## executes phpstan analizer
	docker-compose run --rm --no-deps php sh -lc 'php -d memory_limit=-1 ./vendor/bin/phpstan analyse -l 6 -c phpstan.neon src tests'


.PHONY: psalm
psalm: ## execute psalm analizer
	docker-compose run --rm --no-deps php sh -lc './vendor/bin/psalm --config=psalm.xml --no-cache'

.PHONY: phan
phan: ## phan is a static analyzer for PHP that prefers to minimize false-positives.
	docker-compose run --rm --no-deps php sh -lc 'PHAN_DISABLE_XDEBUG_WARN=1 PHAN_ALLOW_XDEBUG=0 php -d zend.enable_gc=0 ./vendor/bin/phan --config-file .phan/config.php --require-config-exists'

.PHONY: lint
lint: ## checks syntax of PHP files
	docker-compose run --rm --no-deps php sh -lc './vendor/bin/parallel-lint ./ --exclude vendor --exclude bin/.phpunit'

.PHONY: layer
layer: ## Check issues with layers (deptrac tool)
	docker-compose run --rm --no-deps php sh -lc './vendor/bin/deptrac analyze --formatter-graphviz=0'

.PHONY: logs
logs: ## look for service logs
	docker-compose logs -f $(RUN_ARGS)

.PHONY: help
help: ## Display this help message
	    @cat $(MAKEFILE_LIST) | grep -e "^[a-zA-Z_\-]*: *.*## *" | awk 'BEGIN {FS = ":.*?## "}; {printf "\033[36m%-30s\033[0m %s\n", $$1, $$2}'

.PHONY: php-shell
php-shell: ## PHP shell
	docker-compose run --rm php sh -lflay

unit-tests: ## Run unit-tests suite
	docker-compose run --rm php sh -lc 'vendor/bin/phpunit --testsuite unit-tests'

static-analysis: phan psalm phpstan layer coding-standards ## Run phpstan, psalm, easycoding standarts code static analysis

coding-standards: ## Run check and validate code standards tests
	docker-compose run --rm --no-deps php sh -lc 'vendor/bin/ecs check src tests'
	docker-compose run --rm --no-deps php sh -lc 'vendor/bin/phpmd src/ text phpmd.xml'

coding-standards-fixer: ## Run code standards fixer
	docker-compose run --rm --no-deps php sh -lc 'vendor/bin/ecs check src tests --fix'

security-tests: ## The SensioLabs Security Checker
	docker-compose run --rm --no-deps php sh -lc 'vendor/bin/security-checker security:check --end-point=http://security.sensiolabs.org/check_lock'

.PHONY: test lint static-analysis coding-standards composer-validate phpunit
test: build lint static-analysis coding-standards composer-validate phpunit stop ## Run all test suites
