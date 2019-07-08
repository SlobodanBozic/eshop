<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
  /**

   * Create a new controller instance.
   *
   * @return void
   */
  public function ajaxRequest()

  {
      return view('ajaxRequest');
  }
  /**
   * Create a new controller instance.
   *
   * @return void

   */
  public function ajaxRequestPost(Request $request)
  {
    // $input = $request->all();
    // return response()->json(['uspeh'=>'Got Simple Ajax Request.']);
    $input = $request->all();
    //$name = $input['name'];

    return response()->json(['uspeh'=> $input]);


  }
}
