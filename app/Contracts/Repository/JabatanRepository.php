<?php

namespace App\Contracts\Repository;

use App\Contracts\Interfaces\JabatanInterface;
use App\Models\Jabatan;

class JabatanRepository extends BaseRepository implements JabatanInterface
{
    public function __construct(Jabatan $model)
    {
        $this->model = $model;
    }

    public function get(): mixed
    {
        return $this->model->query()
            ->get();
    }

    public function show(mixed $id): mixed
    {
        return $this->model->query()
//            ->with('karyawan')
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
