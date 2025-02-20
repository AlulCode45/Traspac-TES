<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class UnitKerja extends Model
{
    protected  $guarded = ['id'];

    public function karyawan(): HasMany
    {
        return $this->hasMany(Karyawan::class);
    }
}
