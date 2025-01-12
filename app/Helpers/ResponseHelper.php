<?php

namespace App\Helpers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

class ResponseHelper
{
    /**
     * @param mixed $data
     * @param string $message
     * @param int $status
     * @return JsonResponse
     */
    public static function success(
        mixed $data = [],
        string $message = 'Retrieved successfully.',
        int $status = Response::HTTP_OK,
    ): JsonResponse
    {
        return response()->json([
            'meta' => [
                'message' => $message,
                'status' => $status,
            ],
            'data' => $data
        ],$status);
    }

    /**
     * @param mixed $error
     * @param string $message
     * @param int $status
     * @return JsonResponse
     */
    public static function error(
        mixed $error = [],
        string $message = 'Something went wrong.',
        int $status = Response::HTTP_BAD_REQUEST,
    ): JsonResponse
    {
        return response()->json([
            'meta' => [
                'message' => $message,
                'status' => $status,
            ],
            'errors' => $error
        ],$status);
    }
}
