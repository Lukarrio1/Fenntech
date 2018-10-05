<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Slide;

class SlideController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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
      return view('Slides.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $this->validate($request, [
            'slide' => 'image|max:1999',
         ]);
     //gets the image name with extension.
     $filenameWithExt= $request->file('slide')->getClientOriginalName();
     //gets the just the file name
     $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
     //gets extension
     $extension = $request->file('slide')->getClientOriginalExtension();
     //new file name
     $filenametostore= $filename.'_'.time().'.'.$extension;
    $path= $request->file('slide')->storeAs('public/Slides/', $filenametostore);
     
       $slider = new Slide;
       if($request->input('caption')==null){
           $caption =" ";
        $slider->captions =$caption;
    }else{
        $slider->captions =$request->input('caption');
    }
    $slider->slides = $filenametostore;
    $slider->save();
    return redirect('Viewall/All_slide')->with('success','Slide Added');
     
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $slide = Slide::find($id);
        return view('Slides.show')->with('slide',$slide);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $slide = Slide::find($id);
        return view('Slides.edit')->with('slide',$slide);
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
        $slider = Slide::find($id);
        $slider->captions =$request->input('caption');
        $slider->save();
        return redirect('Viewall/All_slide')->with('success','Slide Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $slide = Slide::find($id);
        if(Storage::delete('public/slides/'.$slide->slides)){
            $slide->delete();
            return redirect('Viewall/All_slide')->with('error','Slide deleted');
    }
}
}