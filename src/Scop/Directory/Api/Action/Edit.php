<?php

declare(strict_types=1);

namespace App\Scop\Directory\Api\Action;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

final class Edit extends Add
{
    /**
     * @Route(path="/scop/edit", methods={"POST"}, name="edit_scop")
     */
    public function __invoke(Request $request): JsonResponse
    {
        return parent::__invoke($request);
    }
}
