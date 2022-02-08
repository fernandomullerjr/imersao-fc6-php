<?php

declare(strict_types=1);

namespace App\Job;

use App\Service\MailListsService;
use Hyperf\AsyncQueue\Job;
use Hyperf\Contract\StdoutLoggerInterface;
use Hyperf\Di\Annotation\Inject;

class SendMailTweetsJob extends Job
{
    /**
     * @Inject()
     */
    public StdoutLoggerInterface $logger;

    public MailListsService $mailListsService;

    public function __construct()
    {
    }

    public function handle(): void
    {
        $mail_list = $this->mailListsService->find();

        $this->logger->info('Kafka para enviar a mensagem para o Wesley');
    }
}
