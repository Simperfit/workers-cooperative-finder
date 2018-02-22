<?php

namespace App\Scop\Directory\Action;

use Symfony\Component\HttpFoundation\Response;

class Add
{
    public function __construct()
    {

    }

    public function __invoke()
    {
        return new Response('');
    }

}
