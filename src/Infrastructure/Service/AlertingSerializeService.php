<?php

declare(strict_types=1);

namespace MicroModule\Alerting\Infrastructure\Service;

use MicroModule\Alerting\Domain\Entity\AlertingEntity;
use MicroModule\Base\Domain\Entity\SerializableInterface;
use MicroModule\Base\Domain\Exception\SerializationException;
use MicroModule\Base\Domain\Service\SerializableServiceInterface;

/**
 * Class AlertingSerializeService.
 *
 * @category Infrastructure\Service
 */
class AlertingSerializeService implements SerializableServiceInterface
{
    /**
     * Factory method for initialize new AlertingEntity object.
     *
     * @param mixed $data
     *
     * @return AlertingEntity
     *
     * @throws \Assert\AssertionFailedException
     * @throws \Assert\AssertionFailedException
     * @throws \Assert\AssertionFailedException
     */
    public function deserialize($data): object
    {
        return AlertingEntity::deserialize($data);
    }

    /**
     * Factory method to transform DTO to array.
     *
     * @return mixed
     *
     * @throws SerializationException
     */
    public function serialize(object $object)
    {
        if ($object instanceof SerializableInterface) {
            return $object->serialize();
        }

        throw new SerializationException(sprintf('Object \'%s\' cannot be serialize!', get_class($object)));
    }
}
