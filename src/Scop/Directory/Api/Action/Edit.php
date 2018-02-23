<?php

namespace App\Scop\Directory\Action;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class Edit extends Add
{
    public function __invoke(Request $request)
    {
        return parent::__invoke($request);
    }
}
