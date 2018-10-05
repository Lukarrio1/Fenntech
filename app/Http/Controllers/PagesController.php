<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Test;

class PagesController extends Controller
{
public function about(){
  $homes = Test::all();
return view('pages.about')->with('homes',$homes);
 }
}
