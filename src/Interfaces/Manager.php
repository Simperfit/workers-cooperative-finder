<?php

namespace App\Interfaces;

interface Manager
{
    public function create(IsManageable $entity): IsManageable;

    public function delete(IsManageable $entity): IsManageable;

    public function fromJson(string $json): IsManageable;
}