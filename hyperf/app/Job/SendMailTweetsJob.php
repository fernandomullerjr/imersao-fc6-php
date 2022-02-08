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
namespace App\Job;

use App\Service\MailListsService;
use Hyperf\AsyncQueue\Job;

class SendMailTweetsJob extends Job
{
    public function __construct(
        private MailListsService $mailListsService,
    ) {
    }

    public function handle(): void
    {
        $mail_list = $this->mailListsService->find();

        echo "Kafka para enviar a mensagem para o Wesley\n";
    }
}
