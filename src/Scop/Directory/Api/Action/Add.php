<?php

namespace App\Scop\Directory\Action;

use App\Scop\Manager\Scop;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class Add
{
    private $manager;

    public function __construct(Scop $manager)
    {
        $this->manager = $manager;
    }

    public function __invoke(Request $request)
    {
        return new JsonResponse($this->manager->toJson($this->manager->createOrUpdate($this->manager->fromJson($request->getContent()))), 204);
    }

}
