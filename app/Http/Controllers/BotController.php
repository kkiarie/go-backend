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



    public function greeting()
    {
    	$which_day="";

		$hour = date("H");
		$day = date("l");
		$salutation="";
		if ($hour >= 20) {
		    $greetings = "Good Evening!";
		} elseif ($hour > 17) {
		   $greetings = "Good Evening!";
		} elseif ($hour > 11) {
		    $greetings = "Good Afternoon!";
		} elseif ($hour < 12) {
		   $greetings = "Good Morning!";
		}
		if($day=="Sunday" || $day=="Sartuday")
		{
			$which_day="hope your having a great weekend so far!. How can i be of assistance ?";
		}
		else{

			$which_day="hope your having a great day. What can i do for you today?";
		}
		$msg="ðŸ‘‹ ".$greetings." ".$which_day;
    }

    	public function bye()
	{

		$which_day="";

		$hour = date("H");
		$day = date("l");
		$salutation="";
		if ($hour >= 20) {
		    $greetings = "Good Evening!";
		} elseif ($hour > 17) {
		   $greetings = "Good Evening!";
		} elseif ($hour > 11) {
		    $greetings = "Good Afternoon!";
		} elseif ($hour < 12) {
		   $greetings = "Good Morning!";
		}
		if($day=="Sunday" || $day=="Saturday")
		{
			$which_day="have yourself a great weekend!";
		}
		else{

			$which_day="have yourself a great day!";
		}
		$msg="ðŸ‘‹ ".$which_day;

		return json_encode(["message"=>$msg]);

	}
}
