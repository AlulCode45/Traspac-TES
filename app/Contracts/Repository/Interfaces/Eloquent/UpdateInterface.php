<?php

namespace App\Contracts\Repository\Interfaces\Eloquent;

interface UpdateInterface
{
    public function update(mixed $id, array $data): mixed;
}
