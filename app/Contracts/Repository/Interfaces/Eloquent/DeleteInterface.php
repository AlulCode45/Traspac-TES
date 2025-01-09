<?php

namespace App\Contracts\Repository\Interfaces\Eloquent;

interface DeleteInterface
{
    public function delete(mixed $id): bool;
}
