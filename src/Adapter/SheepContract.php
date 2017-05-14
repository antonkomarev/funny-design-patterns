<?php

declare(strict_types=1);

/*
 * This file is part of Funny Design Patterns.
 *
 * (c) Anton Komarev <a.komarev@cybercog.su>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace AK\FunnyDesignPatterns\Adapter;

interface SheepContract
{
    public function chewGrass(): void;

    public function bleat(): void;
}
