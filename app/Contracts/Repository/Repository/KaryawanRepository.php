<?php

namespace App\Contracts\Repository\Repository;


use App\Contracts\Repository\Interfaces\KaryawanInterface;
use App\Models\Karyawan;

class KaryawanRepository extends BaseRepository implements KaryawanInterface
{
    public function __construct(Karyawan $model)
    {
        $this->model = $model;
    }

    public function get(): mixed
    {
        return $this->model->query()
            ->with(['jabatan', 'unit_kerja'])
            ->get();
    }

    public function show(mixed $id): mixed
    {
        return $this->model->query()
            ->with(['jabatan', 'unit_kerja'])
            ->findOrFail($id);
    }

    public function store(array $data): mixed
    {
        return $this->model->query()
            ->create($data);
    }

    public function update(mixed $id, array $data): mixed
    {
        return $this->show($id)
            ->update($data);
    }

    public function delete(mixed $id): bool
    {
        return $this->show($id)
            ->delete();
    }
}
