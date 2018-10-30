<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Team;
use App\Post;
use App\Slide;

class ViewallController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth',['except'=>['']]);
    }
    // This function returns all of the team members
    public function All_team(){
        $teams = Team::orderby('created_at','asec')->get();
        if($teams==null){
            return redirect('Viewall/All_team')->with('error','Sorry there arent any team members..');
        }else{
        return view('Viewall.All_team')->with('teams',$teams);
        }
    }
    // This function returns all of the jobs
    public function All_jobs(){
        $jobs = Post::orderby('created_at','asc')->get();
        if($jobs==null){
            return redirect('Viewall/All_job')->with('error','Sorry there arent any jobs..');
        }
            else{
             return view('Viewall.All_job')->with('jobs',$jobs);
            }

        }
    // This function returns all of the slides
    public function All_slides(){
        $slides = Slide::orderby('created_at','asc')->get();
        if($slides==null){
            return redirect('Viewall/All_slide')->with('error','Sorry there arent any jobs..');
        }
            else{
             return view('Viewall.All_slide')->with('slides',$slides);
            }

        }
}
