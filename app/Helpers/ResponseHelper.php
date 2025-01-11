<?php

namespace App\Helpers;

class ResponseHelper
{
    public static function success(
        mixed $data = [],
        string $message = 'Retrieved successfully.',
        int $status = 200,
    )
    {
        return response()->json([
            'meta' => [
                'message' => $message,
                'status' => $status,
            ],
            'data' => $data
        ],$status);
    }

    public static function error(
        mixed $error = [],
        string $message = 'Something went wrong.',
        int $status = 500,
    ){
        return response()->json([
            'meta' => [
                'message' => $message,
                'status' => $status,
            ],
            'errors' => $error
        ],$status);
    }
}
