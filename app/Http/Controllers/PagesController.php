<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Url;

class PagesController extends Controller
{
    /**
    * Route function for '/' - Home
    * @return - view Homepage
    */
    public function home()
    {
      return view('pages.home');
    }

    /**
    * Route function for Redirecting to expected URL
    * @return - redirect to url else view -> 404
    */

    public function redirectto($code){
		$link = \App\Url::where('code', $code)-> first();
		if ($link) {
			return redirect($link->url);
		}
    else {
      return view('pages.404');
    }
	}
}
