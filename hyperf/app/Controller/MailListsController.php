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

use App\Request\MailListRequest;
use App\Service\MailListsService;
use Hyperf\HttpServer\Annotation\Controller;
use Hyperf\HttpServer\Annotation\GetMapping;
use Hyperf\HttpServer\Annotation\PostMapping;
use Hyperf\HttpServer\Contract\ResponseInterface;

/**
 * @Controller(prefix="mail-lists")
 */
class MailListsController
{
    public function __construct(
        private MailListsService $mailListsService
    ) {
    }

    /**
     * @PostMapping(path="")
     */
    public function create(MailListRequest $request, ResponseInterface $response): \Psr\Http\Message\ResponseInterface
    {
        $mail_list = $this->mailListsService->create(
            $request->input('name'),
            $request->input('email'),
        );

        return $response->json($mail_list);
    }

    /**
     * @GetMapping(path="{name}")
     */
    public function getMailList(string $name, ResponseInterface $response): \Psr\Http\Message\ResponseInterface
    {
        $mail_list = $this->mailListsService->find($name);

        return $response->json($mail_list);
    }
}
