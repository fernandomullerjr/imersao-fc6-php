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
namespace App\Service;

use App\Model\MailList;
use Hyperf\Database\Model\Collection;

class MailListsService
{
    public function find(string $name = 'default'): Collection
    {
        return MailList::where('name', $name)->get();
    }

    public function create(string $name, string $email): MailList
    {
        return MailList::create([
            'name' => $name,
            'email' => $email,
        ]);
    }
}
