<?php

namespace App\Factory;

use App\Entity\Cv\Cv;
use App\Entity\Cv\CvAddress;
use App\Entity\Cv\CvMainData;

final class CvFactory
{
    public static function create(): Cv
    {
        $main = new CvMainData();
        $address = new CvAddress();

        return new Cv($main, $address);
    }
}