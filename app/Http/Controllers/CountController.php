<?php

namespace App\Http\Controllers;

use App\Contracts\Interfaces\JabatanInterface;
use App\Contracts\Interfaces\KaryawanInterface;
use App\Contracts\Interfaces\UnitKerjaInterface;
use App\Helpers\ResponseHelper;
use Illuminate\Http\Request;

class CountController extends Controller
{
    private JabatanInterface $jabatan;
    private UnitKerjaInterface $unitKerja;
    private KaryawanInterface $karyawan;

    public function __construct(
        JabatanInterface $jabatan,
        UnitKerjaInterface $unitKerja,
        KaryawanInterface $karyawan
    ){
        $this->jabatan = $jabatan;
        $this->unitKerja = $unitKerja;
        $this->karyawan = $karyawan;
    }

    public function count()
    {
        return ResponseHelper::success([
            'jabatan' => $this->jabatan->count(),
            'unit_kerja' => $this->unitKerja->count(),
            'karyawan' => $this->karyawan->count()
        ]);
    }
}
