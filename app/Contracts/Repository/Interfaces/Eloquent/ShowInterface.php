<?php

namespace App\Contracts\Repository\Interfaces\Eloquent;

interface ShowInterface
{
    public function show(mixed $id): mixed;
}
