<?php

namespace App\Factory;

use App\Models\Cv\Cv;
use App\Models\Cv\CvAddress;
use App\Models\Cv\CvMainData;

final class CvFactory
{
    public static function create(): Cv
    {
        $main = new CvMainData();
        $address = new CvAddress();

        return new Cv($main, $address);
    }
}