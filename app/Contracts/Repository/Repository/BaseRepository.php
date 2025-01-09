<?php

namespace App\Contracts\Repository\Repository;

use Illuminate\Database\Eloquent\Model;

abstract class BaseRepository
{
    public Model $model;
}
