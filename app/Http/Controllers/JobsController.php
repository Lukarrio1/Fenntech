<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Test;
class JobsController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth',['except'=>['index','Test']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){ 
           $posts = Post::orderby('created_at','asc')->get();
        return view('Jobs.index')->with('posts',$posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Jobs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'title' =>'required|max:100',
            'body'  => 'required',
             
        ]);
          $post = new Post;
          $post ->title = $request->input('title');
          $post ->body = $request->input('body');
          $post->save();
          return redirect('Viewall/All_job')->with('success','Job Created');
     
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post=Post::find($id);
        if($post==null){
         return redirect('/Jobs')->with('error','This job is no longer in the database');
        }else{
        return view('Jobs.show',compact('post'));
    }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post=Post::find($id);
        return view('Jobs.edit')->with('post',$post);
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
        $this->validate($request,[
            'title' =>'required|max:100',
            'body'  => 'required'
        ]);
          $post =Post::find($id);
          $post ->title = $request->input('title');
          $post ->body = $request->input('body');
          $post->save();
          return redirect('Viewall/All_job')->with('success','Job Updated');
     
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $post =Post::find($id);
       $counter= Post::all();
       if($post==null){
        return redirect('/Jobs')->with('error','There was an error while deleting from the database, the error is now fixed.');
        }
        else{
         $post->delete();
        if(count($counter)<1){
         return redirect('/')->with('error','Their arent any jobs to show');   
        }
        else{
        return redirect('Viewall/All_job')->with('error','Job removed');
       }
       
       }
    }
   
}
