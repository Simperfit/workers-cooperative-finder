<?php

declare(strict_types=1);

namespace App\Scop\Directory\Api\Action;

use App\Scop\Manager\Scop;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class Single
{
    private $manager;

    public function __construct(Scop $manager)
    {
        $this->manager = $manager;
    }

    public function __invoke(Request $request)
    {
        return new JsonResponse($this->manager->toJson($this->manager->findOne(['id' => $request->query->get('id')])));
    }
}
