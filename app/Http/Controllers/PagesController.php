<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
  public function __construct()
  {
      //$this->middleware('auth')->except();
    $this->middleware('auth', ['except' => ['getAbout','getServices']]);
  }

    public function getAbout(){
      $title = 'Welcome to About Page!!!';
      return view('pages.about')->with('title',$title);
    }

    public function getServices(){
      $title = 'Welcome to Services Page!!!';
      $data = [
        'title' => 'Welcome to Services Page!!!',
        'content' => 'This is the Services page',
        'services' => ['Web Disign','Programing','SEO']
      ];
      return view('pages.services')->with($data)->with('title',$title);
    }
    public function getUsers($id){
      // return view('pages.users');
      return $id;
    }
}
