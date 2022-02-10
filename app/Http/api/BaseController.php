<?php

namespace App\Http\Controllers\api;
use App\Http\Controllers\Controller as Controller;

class BaseController extends Controller {
   
    /**
     * @param $message
     * @param $result
     * @param \Illuminate\Http\JsonResponse
     */
    public function sendResponse($message,$result){
        $response=[

            'success'=> true,
            'data'=> $result,
            'message'=> $message
        ];
        return response()->json($response,200);
       
    }

    /**
     * @param $error
     * @param array $errorMessages
     * @param \Illuminate\Http\JsonResponse
     */
    public function sendError($error,$errorMessages=[]){
        $response=[

            'success'=> false,
            'message'=> $error
                       
        ];
        
       if(!empty($errorMessage)){
           $response['data']=$errorMessages;
       }
       return  response()->json($response0)
       
    }




}