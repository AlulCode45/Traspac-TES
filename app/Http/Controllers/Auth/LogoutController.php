<?php

namespace App\Http\Controllers\Auth;

use App\Helpers\ResponseHelper;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LogoutController extends Controller
{
    public function handle()
    {
        try{
            request()->user()->tokens()->delete();
            return ResponseHelper::success(message: 'Logout Successfully');
        }catch (\Exception $exception){
            return ResponseHelper::error($exception->getMessage());
        }
    }
}
