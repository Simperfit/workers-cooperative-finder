<?php

declare(strict_types=1);

namespace App\Scop\Directory\Api\Action;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class Listing
{
    public function __construct()
    {
    }

    public function __invoke(Request $request)
    {
        return new Response('');
    }
}
