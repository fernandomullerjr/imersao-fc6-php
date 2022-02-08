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
namespace App\Controller;

use App\Service\TweetsService;
use Hyperf\HttpServer\Annotation\Controller;
use Hyperf\HttpServer\Annotation\GetMapping;
use Hyperf\HttpServer\Contract\RequestInterface;
use Hyperf\HttpServer\Contract\ResponseInterface;

/**
 * @Controller(prefix="tweets")
 */
class TweetsController
{
    public function __construct(
        private TweetsService $tweetsService,
    ) {
    }

    /**
     * @GetMapping(path="")
     */
    public function getTweets(RequestInterface $request, ResponseInterface $response): \Psr\Http\Message\ResponseInterface
    {
        return $response->json($this->tweetsService->findAll());
    }
}
