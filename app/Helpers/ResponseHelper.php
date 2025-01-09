<?php

namespace App\Helpers;

class ResponseHelper
{
    public static function success(
        string $message = 'Retrieved successfully.',
        int $status = 200,
        array $data = []
    )
    {
        return response()->json([
            'meta' => [
                'message' => $message,
                'status' => $status,
            ],
            'data' => $data
        ]);
    }

    public static function error(
        string $message = 'Something went wrong.',
        int $status = 500,
        array $error = []
    ){
        return response()->json([
            'meta' => [
                'message' => $message,
                'status' => $status,
            ],
            'errors' => $error
        ]);
    }
}
