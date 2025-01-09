<?php

namespace App\Contracts\Repository\Interfaces\Eloquent;

interface InsertInterface
{
    public function insert(array $data): mixed;
}
