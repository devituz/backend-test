<?php

namespace App\Services;

class BaseService
{
    protected function successResponse($data, $message = 'Operation successful')
    {
        return response()->json([
            'success' => true,
            'message' => $message,
            'result' => $data
        ]);
    }

    protected function errorResponse($message = 'Operation failed')
    {
        return response()->json([
            'success' => false,
            'message' => $message
        ]);
    }
}
