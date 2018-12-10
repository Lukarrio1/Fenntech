<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Team;
use App\Post;
use App\Slide;
use App\Contact;

class ViewallController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth',['except'=>['']]);
    }
    // This function returns all of the team members
    public function All_team(){
        $inbox = Contact::all();
        $teams = Team::orderby('created_at','asec')->get();
        if($teams==null){
            return redirect('Viewall/All_team')->with('error','Sorry there arent any team members..')->with('inbox',$inbox);;
        }else{
        return view('Viewall.All_team')->with('teams',$teams)->with('inbox',$inbox);
        }
    }
    // This function returns all of the jobs
    public function All_jobs(){
        $inbox = Contact::all();
        $jobs = Post::orderby('created_at','asc')->get();
        if($jobs==null){
            return redirect('Viewall/All_job')->with('error','Sorry there arent any jobs..')->with('inbox',$inbox);
        }
            else{
             return view('Viewall.All_job')->with('jobs',$jobs)->with('inbox',$inbox);
            }

        }
    // This function returns all of the slides
    public function All_slides(){
        $inbox = Contact::all();
        $slides = Slide::orderby('created_at','asc')->get();
        if($slides==null){
            return redirect('Viewall/All_slide')->with('error','Sorry there arent any jobs..')->with('inbox',$inbox);
        }
            else{
             return view('Viewall.All_slide')->with('slides',$slides)->with('inbox',$inbox);
            }

        }
}
