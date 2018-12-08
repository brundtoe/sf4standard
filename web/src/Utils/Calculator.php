<?php

/**
 * Created by PhpStorm.
 * User: bent
 * Date: 09/05/18
 * Time: 14:49
 *
 * demo eksmeple på anvendelse af phpunit til test af Symfony app
 */

namespace App\Utils;


class Calculator
{
    public function add(int $a, int $b): int
    {
        return $a + $b;
    }
}