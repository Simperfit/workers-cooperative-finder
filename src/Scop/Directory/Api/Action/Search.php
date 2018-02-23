<?php

namespace App\Scop\Directory\Action;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class Search
{
    public function __construct()
    {
        //@TODO: use a elastic search.
    }

    public function __invoke(Request $request)
    {
        return new Response('');
    }

}
