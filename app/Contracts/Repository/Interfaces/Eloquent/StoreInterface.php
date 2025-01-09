<?php

namespace App\Contracts\Repository\Interfaces\Eloquent;

interface StoreInterface
{
    public function store(array $data): mixed;
}
