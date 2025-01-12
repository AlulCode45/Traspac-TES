<?php

namespace App\Http\Controllers;

use App\Contracts\Interfaces\JabatanInterface;
use App\Helpers\ResponseHelper;
use App\Http\Requests\JabatanRequest;

class JabatanController extends Controller
{
    private JabatanInterface $jabatan;

    public function __construct(
        JabatanInterface $jabatan
    )
    {
        $this->jabatan = $jabatan;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        return ResponseHelper::success($this->jabatan->get());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(JabatanRequest $request)
    {
        try {
            $jabatan = $this->jabatan->store($request->validated());
            return ResponseHelper::success($this->jabatan->show($jabatan->id), 'Store data successfully', 201);
        } catch (\Exception $exception) {
            return ResponseHelper::error(message: $exception->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        try {
            return ResponseHelper::success($this->jabatan->show($id));
        } catch (\Exception $exception) {
            return ResponseHelper::error(message: $exception->getMessage());
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(JabatanRequest $request, string $id)
    {
        try {
            $this->jabatan->update($id, $request->validated());
            return ResponseHelper::success(data: $request->validated(), message: "Update data successfully");
        } catch (\Exception $exception) {
            return ResponseHelper::error(message: $exception->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $this->jabatan->delete($id);
            return ResponseHelper::success(message: "Delete data successfully");
        } catch (\Exception $exception) {
            return ResponseHelper::error(message: $exception->getMessage());
        }
    }
}
