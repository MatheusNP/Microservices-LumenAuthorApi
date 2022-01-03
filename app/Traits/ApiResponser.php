<?php

namespace App\Traits;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

trait ApiResponser {

    /**
     * Build success responses;
     *
     * @param array $data
     * @param integer $code
     * @return JsonResponse
     */
    public function successResponse(array $data, int $code = Response::HTTP_OK): JsonResponse
    {
        return response()->json(['data' => $data], $code);
    }

    /**
     * Build error responses;
     *
     * @param array $message
     * @param integer $code
     * @return JsonResponse
     */
    public function errorResponse(array $message, int $code): JsonResponse
    {
        return response()->json(['error' => $message, 'code' => $code], $code);
    }
}
