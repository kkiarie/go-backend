<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;

class BotController extends Controller
{
    //

    public function smartbot()
    {

    	$response = Http::post('https://cloud.goinsurance.co.ke/webhooks/rest/webhook', 
    		[
		    'message' => 'hi',
		    'sender' => Str::random(40),
		]);

    	// return $response->successful();

		return $response;
    }
}
