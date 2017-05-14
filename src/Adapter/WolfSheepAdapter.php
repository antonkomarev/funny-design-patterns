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

class WolfSheepAdapter implements WolfContract, SheepContract
{
    private $wolf;

    public function __construct(WolfContract $wolf)
    {
        $this->wolf = $wolf;
    }

    public function hunt(): void
    {
        $this->wolf->hunt();
    }

    public function howl(): void
    {
        $this->wolf->howl();
    }

    public function attack(SheepContract $sheep): void
    {
        $this->wolf->attack($sheep);
    }

    public function chewGrass(): void
    {
        echo 'Wolf is chewing grass... disgusting...' . PHP_EOL;
    }

    public function bleat(): void
    {
        echo 'Wolf trying to bleat: "Wooooeaaaaa!"' . PHP_EOL;
    }
}
