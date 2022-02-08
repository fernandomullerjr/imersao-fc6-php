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

use App\Model\Tweet;
use Hyperf\Database\Model\Collection;

class TweetsService
{
    /**
     * @return Collection<Tweet>
     */
    public function findAll(int $offset = 0, int $limit = 10): Collection
    {
        return Tweet::query()
            ->offset($offset)
            ->limit($limit)
            ->get();
    }
}
