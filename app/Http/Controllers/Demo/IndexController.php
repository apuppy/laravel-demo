<?php


namespace App\Http\Controllers\Demo;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class IndexController extends Controller
{

    public function hello(Request $request)
    {
        // var_dump($_SERVER['HTTP_X_REQUEST_ID']); // in php variable $_SERVER
        // var_dump($request->header('x-request-id')); // lower-cased in laravel http headers

        $message = 'laravel log for testing!';
        Log::emergency($message);
        Log::alert($message);
        Log::critical($message);
        Log::error($message);
        Log::warning($message);
        Log::notice($message);
        Log::info($message);
        Log::debug($message);
        // dump($_SERVER['request_id']);
        exit();
    }

}
