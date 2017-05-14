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

require_once __DIR__ . '/../../vendor/autoload.php';

use AK\FunnyDesignPatterns\Adapter\Sheep;
use AK\FunnyDesignPatterns\Adapter\Wolf;
use AK\FunnyDesignPatterns\Adapter\WolfSheepAdapter;

echo PHP_EOL;

$sheep = new Sheep();
$sheep->chewGrass();

$wolf = new Wolf();
$wolf->hunt();

$trickyWolf = new WolfSheepAdapter($wolf);
$trickyWolf->chewGrass();
$trickyWolf->bleat();

$trickyWolf->attack($sheep);
