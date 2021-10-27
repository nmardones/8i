<?php

namespace App\Traits;

use Illuminate\Http\Response;

trait ApiResponser
{
    /**
     * @param $data
     * @param int $statusCode
     * @return Response|\Laravel\Lumen\Http\ResponseFactory
     */
    public function successResponse($data, $statusCode = Response::HTTP_OK)
    {
        return response($data, $statusCode)->header('Content-Type', 'application/json');
    }

    /**
     * @param $errorMessage
     * @param $statusCode
     * @return \Illuminate\Http\JsonResponse
     */
    public function errorResponse($errorMessage, $statusCode)
    {
        return response()->json(['error' => $errorMessage, 'error_code' => $statusCode], $statusCode);
    }

    /**
     * @param $errorMessage
     * @param $statusCode
     * @return Response|\Laravel\Lumen\Http\ResponseFactory
     */
    public function errorMessage($errorMessage, $statusCode)
    {
        return response($errorMessage, $statusCode)->header('Content-Type', 'application/json');
    }
}
