<?php

namespace App\Controllers;

use App\Database\Database;
use App\Entity\Cv\Cv;
use App\Entity\Cv\CvEducation;
use App\Redirect;
use App\View;

final class CvController
{
    public function selection(): View
    {
        return new View('index');
    }

    public function create(): Redirect
    {
        $cv = new Cv();

        $education = new CvEducation();
        $education->setName("RTK");

        $cv->education()->add($education);

        Database::em()->persist($cv);

        Database::em()->flush();

        return new Redirect('/');
    }
}