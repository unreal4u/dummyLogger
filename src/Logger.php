<?php

declare(strict_types=1);

namespace unreal4u\Dummy;

use Psr\Log\LoggerInterface;

final class Logger implements LoggerInterface
{

    /**
     * System is unusable.
     *
     * @param string|\Stringable $message
     * @param array $context
     *
     * @return void
     */
    public function emergency(string|\Stringable $message, array $context = []): void
    {
    }

    /**
     * Action must be taken immediately.
     *
     * Example: Entire website down, database unavailable, etc. This should
     * trigger the SMS alerts and wake you up.
     *
     * @param string|\Stringable $message
     * @param array $context
     *
     * @return void
     */
    public function alert(string|\Stringable $message, array $context = []): void
    {
    }

    /**
     * Critical conditions.
     *
     * Example: Application component unavailable, unexpected exception.
     *
     * @param string|\Stringable $message
     * @param array $context
     *
     * @return void
     */
    public function critical(string|\Stringable $message, array $context = []): void
    {
    }

    /**
     * Runtime errors that do not require immediate action but should typically
     * be logged and monitored.
     *
     * @param string|\Stringable $message
     * @param array $context
     *
     * @return void
     */
    public function error(string|\Stringable $message, array $context = []): void
    {
    }

    /**
     * Exceptional occurrences that are not errors.
     *
     * Example: Use of deprecated APIs, poor use of an API, undesirable things
     * that are not necessarily wrong.
     *
     * @param string|\Stringable $message
     * @param array $context
     *
     * @return void
     */
    public function warning(string|\Stringable $message, array $context = []): void
    {
    }

    /**
     * Normal but significant events.
     *
     * @param string|\Stringable $message
     * @param array $context
     *
     * @return void
     */
    public function notice(string|\Stringable $message, array $context = []): void
    {
    }

    /**
     * Interesting events.
     *
     * Example: User logs in, SQL logs.
     *
     * @param string|\Stringable $message
     * @param array $context
     *
     * @return void
     */
    public function info(string|\Stringable $message, array $context = []): void
    {
    }

    /**
     * Detailed debug information.
     *
     * @param string|\Stringable $message
     * @param array $context
     *
     * @return void
     */
    public function debug(string|\Stringable $message, array $context = []): void
    {
    }

    /**
     * Logs with an arbitrary level.
     *
     * @param mixed $level
     * @param string|\Stringable $message
     * @param array $context
     *
     * @return void
     *
     * @throws \Psr\Log\InvalidArgumentException
     */
    public function log($level, string|\Stringable $message, array $context = []): void
    {
    }

    /**
     * Extension of PSR-3: Monolog offers this possibility which I also use often
     *
     * @param string $name
     * @return Logger
     */
    public function withName(string $name): self
    {
        // No need to clone this, as this is a dummy object which doesn't do anything
        return $this;
    }
}
