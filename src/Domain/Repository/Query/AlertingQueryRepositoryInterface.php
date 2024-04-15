<?php

declare(strict_types=1);

namespace MicroModule\Alerting\Domain\Repository\Query;

/**
 * Interface AlertingQueryRepositoryInterface.
 *
 * @category Domain\Query\Repository
 */
interface AlertingQueryRepositoryInterface
{
    public const ALERTA_RESPONSE_STATUS_OPEN = 'open';

    /**
     * Send alert message to alerting service.
     */
    public function sendAlert(string $alertMessage): bool;
}
