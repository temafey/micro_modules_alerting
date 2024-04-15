<?php

declare(strict_types=1);

namespace MicroModule\Alerting\Domain\Repository;

/**
 * Interface StorageRepositoryInterface.
 */
interface StorageRepositoryInterface
{
    /**
     * Performs a synchronous save.
     *
     * @return bool TRUE in case of success, FALSE in case of failure.
     *              If a save is already running, this command will fail and return FALSE.
     */
    public function save(): bool;

    /**
     * Set the string value in argument as value of the key.
     *
     * @param int|mixed[] $timeout [optional] Calling setex() is preferred if you want a timeout.<br>
     *                             Since 2.6.12 it also supports different flags inside an array. Example ['NX', 'EX' => 60]<br>
     *                             EX seconds -- Set the specified expire time, in seconds.<br>
     *                             PX milliseconds -- Set the specified expire time, in milliseconds.<br>
     *                             PX milliseconds -- Set the specified expire time, in milliseconds.<br>
     *                             NX -- Only set the key if it does not already exist.<br>
     *                             XX -- Only set the key if it already exist.<br>
     *
     * @return bool TRUE if the command is successful
     */
    public function set(string $key, string $value, $timeout = 0): bool;

    /**
     * Get the value related to the specified key.
     *
     * @return string|false If key didn't exist, FALSE is returned. Otherwise, the value related to this key is returned.
     */
    public function get(string $key);
}
