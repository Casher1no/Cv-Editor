<?php

namespace App\Controllers;

use App\View;

final class CvController
{
    public function selection(): View
    {
        return new View('index');
    }

    public function create(): View
    {
        return new View('Cv/create');
    }
}