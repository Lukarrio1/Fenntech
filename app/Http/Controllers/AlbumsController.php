<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Album;

class AlbumsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $albums = Album::with('photos')->get();
        if($albums==null){
         return redirect('/portfolio')->with('error','This album does not exist');
        }else{
        return view('portfolio.index')->with('albums',$albums);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('portfolio.create');
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
           'name' => 'required',
           'cover_image' => 'image|max:1999',
        ]);
        //gets the image name with extension.
        $filenameWithExt= $request->file('cover_image')->getClientOriginalName();
        //gets the just the file name
        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
        //gets extension
        $extension = $request->file('cover_image')->getClientOriginalExtension();
        //new file name
        $filenametostore= $filename.'_'.time().'.'.$extension;
         
       $path= $request->file('cover_image')->storeAs('public/album_covers', $filenametostore);

         $album = new Album;
         $album-> name =$request->input('name');
         $album-> description =$request->input('description');
         $album->cover_image= $filenametostore;
         $album->save();
         return redirect('/portfolio')->with('success','album created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $album = Album::with('photos')->find($id);
        if($album==null){
            return redirect('/portfolio')->with('error','This album does not exist');
        }else{
        return view('portfolio.show')->with('album',$album);
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
        $album = Album::find($id);
        if($album==null){
            return reidrect('/portfolio')->with('error','this portfolio does not exist');
        }else{
        if(Storage::delete('public/album_covers/'.$album->cover_image)){
            $album->delete();
            return redirect('/portfolio')->with('success','Album removed');
        }
    }
}
}
