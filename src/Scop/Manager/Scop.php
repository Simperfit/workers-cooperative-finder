<?php

namespace App\Scop\Manager;

use App\Interfaces\IsManageable;
use App\Interfaces\Manager;
use App\Scop\Entity;
use Symfony\Component\Serializer\SerializerInterface;

final class Scop implements Manager
{
    private $serializer;

    public function __construct(SerializerInterface $serializer)
    {
        $this->serializer = $serializer;
    }

    public function create(IsManageable $entity): IsManageable
    {
        // TODO: Implement create() method.
    }

    public function delete(IsManageable $entity): IsManageable
    {
        // TODO: Implement delete() method.
    }

    public function fromJson(string $json): IsManageable
    {
       return $this->serializer->deserialize($json, Entity\Scop::class, 'json');
    }

}