<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
	
    public function home()
    {
        return view('home');
    }

    public function posts (Request $request) {
        $items = [];
        // // var_dump($request);

        if ($request->has('username')) {


            $client = new \GuzzleHttp\Client();
            $url = sprintf('https://graph.facebook.com/v14.0/me/', $request->input('username'));
            $response = $client->get($url);
            $items = json_decode((string) $response->getBody(), true)['items'];
        }

        return view('/home', compact('items'));
		
        // return view('/home');

    }

	public function post (Request $request) {
		return view('user');
	}
}
