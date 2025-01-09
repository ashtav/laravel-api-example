<?php

namespace App\Traits;

trait ApiResponse
{
    public function success($data, $message = 'Success', $status = 200, $additional = [])
    {
        $response = [
            'message' => $message,
            'data' => $data,
            'status' => true,
        ];

        if (!empty($additional)) {
            $response = array_merge($response, $additional);
        }

        return response()->json($response, $status);
    }


    public function error($message, $status = 400)
    {
        return response()->json([
            'message' => $message,
            'status' => false,
        ], $status);
    }
}
