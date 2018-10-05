<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Test;
class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //this is responnsible for auth
    public function __construct()
    {
        $this->middleware('auth',['except'=>['index']]);
    }   

    public function index()
    {
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function create()
    {
        //returns the create view
        return view('testimonial.create');
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
            'testimonial' =>'required',
             
        ]);
          $test = new Test;
          $test ->testimonial = $request->input('testimonial');
          $test->save();
          return redirect('/All_testimonials')->with('success','Testimonial Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $test=Test::find($id);
        if($test==null){
         return redirect('/')->with('error','Sorry this testimonial is not in the database any more.');
        }else{
        return view('testimonial.show')->with('test',$test);
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
        $test=Test::find($id);
        return view('testimonial.edit')->with('test',$test);
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
            'testimonial' =>'required',
             
        ]);
          $test = Test::find($id);
          $test ->testimonial = $request->input('testimonial');
          $test->save();
          return redirect('/All_testimonials')->with('success','Testimonial Created');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       
        $test =Test::find($id);
        $counter = Test::all();
        //this checks if the selected entry to be deleted is actually present
     if($test==null){
        return redirect('/')->with('error','There was an error while deleting from the database, the error is now fixed.');
        }
        else{
         $test->delete();
        if(count($counter)<1){
         return redirect('/')->with('error','There arent any testimonials to show');   
        }
        else{
        return redirect('/')->with('error','Testimonial Removed');
       }
       }
    }
}

    

