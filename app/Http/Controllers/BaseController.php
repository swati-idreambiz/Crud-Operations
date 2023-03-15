<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller as Controller;

class BaseController extends Controller
{
    
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function sendResponse($result, $message)
    {
    	$response = [
            'Status' => 200,
            'Data'    => $result,
            'Message' => $message,
        ];


        return response()->json($response, 200);
    }


    /**
     * return error response.
     *
     * @return \Illuminate\Http\Response
     */
    public function sendError($error, $errorMessages = [], $code = 404)
    {
    	$response = [
            'Status' => 404,
            'Message' => $error,
        ];


        if(!empty($errorMessages)){
            $response['Result'] = $errorMessages;
        }


        return response()->json($response, $code);
    }
    
    public function sendBadError($error, $errorMessages = [], $code = 400)
    {
    	$response = [
            'Status' => 400,
            'Message' => $error,
        ];


        if(!empty($errorMessages)){
            $response['Result'] = $errorMessages;
        }


        return response()->json($response, $code);
    }
}