<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Url;
use App\Classes\RandomString;
use Illuminate\Support\Facades\Schema;

class URLsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    //Generating Random String




    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      // Validate
      $this->validate($request,
        [
          'url'=>'url|required|max:180',
        ]
      );

      //Checking if URL Exists
      $link = $request-> input('url');
      $hasLink = Url::where('url', $link)->count();
      //If url is already existed then return the existed short url
      if ($hasLink>0) {
        $old_url = Url::where('url', $link)->first()->code;
        return redirect('/') -> with('old_url', $old_url);
      }

      //Unless Save Data and redirect Hone with newly created Shorl url
      else{
        $url = new Url();
        $url->url = $request-> input('url');

        //Generating Short URL code and Check the availability
        $str = new RandomString();
        do {
          $code = $str->rand_str(6);
        } while (Url::where('code', '=', $code)->count()>0);
        $url->code = $code;
        $url->save();
        //Generating New URL
        $new_url = $code;
        return redirect('/')->with('new_url', $new_url);
      }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
