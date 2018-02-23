<?php

declare(strict_types=1);

namespace App\Scop\Directory\Api\Action;

use App\Scop\Manager\Scop;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class Add
{
    private $manager;

    public function __construct(Scop $manager)
    {
        $this->manager = $manager;
    }

    /**
     * @Route(path="/scop/add", methods={"POST"}, name="add_scop")
     */
    public function __invoke(Request $request): JsonResponse
    {
        return new JsonResponse($this->manager->toJson($this->manager->createOrUpdate($this->manager->fromJson($request->getContent()))), 204);
    }
}
