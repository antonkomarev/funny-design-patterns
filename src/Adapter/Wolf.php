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

class Wolf implements WolfContract
{
    public function hunt(): void
    {
        echo 'Wolf is hunting for sheeps...' . PHP_EOL;
    }

    public function howl(): void
    {
        echo 'Wolf howling: "Wooooo!"' . PHP_EOL;
    }

    public function attack(SheepContract $sheep): void
    {
        echo 'Wolf attacked sheep: ' . get_class($sheep) . PHP_EOL;
    }
}
