<?php

declare(strict_types=1);
/**
 * This file is part of Imersão FullCycle in PHP.
 *
 * @link     https://imersao.fullcycle.com.br
 * @document https://github.com/leocavalcante/imersao-fc6-php
 * @contact  https://twitter.com/leocavalcante
 * @license  Apache License, Version 2.0
 */
namespace App\Listener;

use Hyperf\AsyncQueue\Event\FailedHandle;
use Hyperf\Contract\StdoutLoggerInterface;
use Hyperf\Event\Annotation\Listener;
use Hyperf\Event\Contract\ListenerInterface;
use Throwable;

/**
 * @Listener
 */
class FailedJobListener implements ListenerInterface
{
    public function __construct(
        private StdoutLoggerInterface $logger,
    ) {
    }

    public function listen(): array
    {
        return [
            FailedHandle::class,
        ];
    }

    /**
     * @param FailedHandle $event
     * @throws Throwable
     */
    public function process(object $event): void
    {
        throw $event->getThrowable();
    }
}
