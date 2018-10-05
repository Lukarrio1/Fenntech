<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Photo;

class PhotosController extends Controller
{
    public function create($album_id){
        if($album_id==null){
            return redirect('/portfolio')->with('error','this album does not exist');
        }else{
    return view('photos.create')->with('album_id',$album_id);
        }
    }



    public function store(Request $request)
    {
        $this->validate($request, [
           'title' => 'required',
           'description' => 'required:max:150',
           'photo' => 'image|required|max:1999',
        ]);
        //gets the image name with extension.
        $filenameWithExt= $request->file('photo')->getClientOriginalName();
        //gets the just the file name
        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
        //gets extension
        $extension = $request->file('photo')->getClientOriginalExtension();
        //new file name
        $filenametostore= $filename.'_'.time().'.'.$extension;
         
       $path= $request->file('photo')->storeAs('public/photos/'.$request->input('album_id'), $filenametostore);

         $photo = new Photo;
         $photo->album_id =$request->input('album_id');
         $photo-> title =$request->input('title');
         $photo-> description =$request->input('description');
         $photo->size=$request->file('photo')->getClientSize();
         $photo->photo= $filenametostore;
         $photo->save();
         return redirect('/portfolio/'.$request->input('album_id'))->with('success','Photo uploaded');
    }

    public function show($id){
        $photo =Photo::find($id);
        if($photo ==null){
            return redirect('/portfolio')->with('error','There was a problem retreiving this from the database');
        }else{
        return view('photos.show')->with('photo',$photo);
        }
    }
 public function destroy($id){
    $photo = Photo::find($id);
    if($photo ==null){
        return redirect('/portfolio/'.$photo->album_id)->with('error','This photo does not exist in the database');
    }else{
    if(Storage::delete('public/photos/'.$photo->album_id.'/'.$photo->photo)){
        $photo->delete();
        return redirect('/portfolio/'.$photo->album_id);
    }
}
 }
}
