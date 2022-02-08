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
namespace App\Task;

use App\Service\EmailsQueue;
use App\Service\TweetsService;
use Hyperf\Contract\StdoutLoggerInterface;
use Hyperf\Crontab\Annotation\Crontab;
use Psr\SimpleCache\CacheInterface;
use Psr\SimpleCache\InvalidArgumentException;

/**
 * @Crontab(name="CheckNewTweets", rule="*\/5 * * * * *", callback="handle")
 */
class CheckNewTweetsTask
{
    private const LIMIT = 10;

    public function __construct(
        private StdoutLoggerInterface $logger,
        private CacheInterface $cache,
        private TweetsService $tweetsService,
        private EmailsQueue $emailsQueue,
    ) {
    }

    /**
     * @throws InvalidArgumentException
     */
    public function handle(): void
    {
        $this->logger->info('Procurando tweets ...');

        $offset = $this->cache->get('tweet_offset', default: 0);

        $this->logger->info("Offset {$offset}");

        $tweets = $this->tweetsService->findAll($offset, self::LIMIT);

        $this->logger->info('Tweets count ' . $tweets->count());

        if ($tweets->count() === self::LIMIT) {
            $this->logger->info('Achou mais tweets');

            $this->cache->set('tweet_offset', $offset + self::LIMIT);
        }

        $this->emailsQueue->add();
    }
}
