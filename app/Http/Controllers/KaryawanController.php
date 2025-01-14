<?php

namespace App\Http\Controllers;

use App\Contracts\Interfaces\KaryawanInterface;
use App\Helpers\ResponseHelper;
use App\Http\Requests\KaryawanRequest;
use App\Services\KaryawanService;

class KaryawanController extends Controller
{

    private KaryawanInterface $karyawan;
    private KaryawanService $karyawanService;

    public function __construct(
        KaryawanInterface $karyawan,
        KaryawanService $karyawanService
    )
    {
        $this->karyawan = $karyawan;
        $this->karyawanService = $karyawanService;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return ResponseHelper::success($this->karyawan->get());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(KaryawanRequest $request)
    {
        try{
            $uploadPhoto = 'default.jpg';
            if ($request->hasFile('photo_profile')){
                $uploadPhoto = $this->karyawanService->validateAndUpload('karyawan',$request->file('photo_profile'));
            }
            $saveKaryawan = [
                ...$request->validated(),
                'photo_profile' => $uploadPhoto,
            ];
            $karyawan = $this->karyawan->store($saveKaryawan);
            return ResponseHelper::success($this->karyawan->show($karyawan->id),'Store data successfully', 201);
        } catch (\Exception $exception){
            return ResponseHelper::error(message: $exception->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        try{
            return ResponseHelper::success($this->karyawan->show($id));
        }catch (\Exception $exception){
            return ResponseHelper::error(message: $exception->getMessage());
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(KaryawanRequest $request, string $id)
    {
        try {
            $uploadPhoto = 'default.jpg';
            if ($request->hasFile('photo_profile')){
                $uploadPhoto = $this->karyawanService->validateAndUpload('karyawan',$request->file('photo_profile'));
            }
            $saveKaryawan = [
                ...$request->validated(),
                'photo_profile' => $uploadPhoto,
            ];
            $this->karyawan->update($id, $saveKaryawan);
            return ResponseHelper::success(data: $saveKaryawan,message: "Update data successfully");
        } catch (\Exception $exception){
            return ResponseHelper::error(message: $exception->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $this->karyawan->delete($id);
            return ResponseHelper::success(message: "Delete data successfully");
        } catch (\Exception $exception){
            return ResponseHelper::error(message: $exception->getMessage());
        }
    }
}
