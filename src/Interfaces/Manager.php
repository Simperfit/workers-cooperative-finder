<?php

declare(strict_types=1);

namespace App\Interfaces;

interface Manager
{
    public function createOrUpdate(IsManageable $entity): IsManageable;

    public function delete(IsManageable $entity): self;

    public function find(array $by);

    public function findOne(array $by): IsManageable;

    public function fromJson(string $json): IsManageable;

    public function toJson(IsManageable $json): string;
}
