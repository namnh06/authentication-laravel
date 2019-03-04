<?php
if (!function_exists('response_success')) {
    function response_success($result, $message = 'success', $status = 200)
    {
        $response = [
            'success' => true,
            'data' => $result,
            'message' => $message,
        ];

        return response()->json($response, $status);
    }
}

if (!function_exists('response_error')) {
    function response_error($result, $message = 'error', $status = 400)
    {
        $response = ['success' => true,
            'data' => $result,
            'message' => $message,
        ];

        return response()->json($response, $status);
    }
}