<?php

namespace App\Contracts\Repository\Interfaces;

use App\Contracts\Repository\Interfaces\Eloquent\DeleteInterface;
use App\Contracts\Repository\Interfaces\Eloquent\GetInterface;
use App\Contracts\Repository\Interfaces\Eloquent\StoreInterface;
use App\Contracts\Repository\Interfaces\Eloquent\ShowInterface;
use App\Contracts\Repository\Interfaces\Eloquent\UpdateInterface;

interface KaryawanInterface extends GetInterface, ShowInterface, DeleteInterface,UpdateInterface,StoreInterface
{

}
