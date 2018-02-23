<?php

declare(strict_types=1);

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

    public function createOrUpdate(IsManageable $entity): IsManageable
    {
        return $entity;
    }

    public function delete(IsManageable $entity): Manager
    {
        return $this;
    }

    public function find(array $by)
    {
       // @TODO: use doctrine ?
    }

    public function findOne(array $by): IsManageable
    {
        // @TODO: use doctrine ?
    }

    public function toJson(IsManageable $entity): string
    {
        return $this->serializer->serialize($entity, 'json');
    }

    public function fromJson(string $json): IsManageable
    {
        return $this->serializer->deserialize($json, Entity\Scop::class, 'json');
    }
}
