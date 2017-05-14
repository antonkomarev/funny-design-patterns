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

class Sheep implements SheepContract
{
    public function chewGrass(): void
    {
        echo 'Sheep is chewing grass...' . PHP_EOL;
    }

    public function bleat(): void
    {
        echo 'Sheep bleating: "Bleeeeeeah!"' . PHP_EOL;
    }
}
