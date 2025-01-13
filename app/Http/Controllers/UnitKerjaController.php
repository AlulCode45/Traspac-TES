<?php

namespace App\Http\Controllers;

use App\Contracts\Interfaces\UnitKerjaInterface;
use App\Helpers\ResponseHelper;
use App\Http\Requests\UnitKerjaRequest;

class UnitKerjaController extends Controller
{
    private UnitKerjaInterface $unit_kerja;

    public function __construct(
        UnitKerjaInterface $unit_kerja
    )
    {
        $this->unit_kerja = $unit_kerja;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        return ResponseHelper::success($this->unit_kerja->get());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UnitKerjaRequest $request)
    {
        try {
            $unit_kerja = $this->unit_kerja->store($request->validated());
            return ResponseHelper::success($this->unit_kerja->show($unit_kerja->id), 'Store data successfully', 201);
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
            return ResponseHelper::success($this->unit_kerja->show($id));
        } catch (\Exception $exception) {
            return ResponseHelper::error(message: $exception->getMessage());
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UnitKerjaRequest $request, string $id)
    {
        try {
            $updaeted = $this->unit_kerja->update($id, $request->validated());
            return ResponseHelper::success(data: $this->unit_kerja->show($id), message: "Update data successfully");
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
            $this->unit_kerja->delete($id);
            return ResponseHelper::success(message: "Delete data successfully");
        } catch (\Exception $exception) {
            return ResponseHelper::error(message: $exception->getMessage());
        }
    }
}
