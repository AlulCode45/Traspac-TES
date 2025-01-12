<?php

namespace App\Contracts\Repository\Repository;

use App\Contracts\Repository\Interfaces\UnitKerjaInterface;
use App\Models\UnitKerja;
use Illuminate\Database\QueryException;

class UnitKerjaRepository extends BaseRepository implements UnitKerjaInterface
{
    public function __construct(UnitKerja $model)
    {
        $this->model = $model;
    }

    public function get(): mixed
    {
        return $this->model->query()
            ->with('karyawan')
            ->get();
    }

    public function show(mixed $id): mixed
    {
        return $this->model->query()
            ->with('karyawan')
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
        return $this->show($id)->delete($id);
    }
}
