<?php

namespace App\Http\Controllers\Auth;

use App\Helpers\ResponseHelper;
use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function handle(LoginRequest $request)
    {
        try {
            if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
                $user = User::query()->find(Auth::id());
                $user['token'] = $user->createToken('appToken')->plainTextToken;
                return ResponseHelper::success(
                    data: $user->toArray(),
                    message: 'Login successfully'
                );
            }else{
                return ResponseHelper::error(message: 'Username / password wrong',status: 401);
            }
        } catch (\Exception $exception) {
            return ResponseHelper::error(
                message: $exception->getMessage(),
            );
        }
    }
}
