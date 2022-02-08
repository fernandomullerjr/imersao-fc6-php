<?php declare(strict_types=1);

namespace App\Service;

use App\Job\SendMailTweetsJob;
use Hyperf\AsyncQueue\Driver\DriverFactory;
use Hyperf\AsyncQueue\Driver\DriverInterface;

class EmailsQueue
{
    private DriverInterface $driver;

    public function __construct(DriverFactory $driverFactory)
    {
        $this->driver = $driverFactory->get('default');
    }

    public function add(): void
    {
        $this->driver->push(new SendMailTweetsJob());
    }
}