<?php

declare(strict_types=1);

/*
 * This file is part of Funny Design Patterns.
 *
 * (c) Anton Komarev <anton@komarev.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace AK\FunnyDesignPatterns\Adapter;

interface WolfContract
{
    public function hunt(): void;

    public function howl(): void;

    public function attack(SheepContract $sheep): void;
}
