<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Team;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth',['except'=>['index']]);
    }

    public function index()
    {
        $teams = Team::orderby('created_at','asc')->get();
        return view('team.index')->with('teams',$teams);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Team.create');
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
            'Name' =>'required|max:20',
            'Position'  => 'required',
            'description' => 'required',
             'picture' => 'image|max:1999',
        ]);
              //gets the image name with extension.
              $filenameWithExt= $request->file('picture')->getClientOriginalName();
              //gets the just the file name
              $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
              //gets extension
              $extension = $request->file('picture')->getClientOriginalExtension();
              //new file name
              $filenametostore= $filename.'_'.time().'.'.$extension;
             $path= $request->file('picture')->storeAs('public/team_pic/', $filenametostore);
          $teams = new Team;
          $teams ->Name = $request->input('Name');
          $teams ->position = $request->input('Position');
          $teams ->description = $request->input('description');
          $teams ->picture = $filenametostore;
          $teams->save();
          return redirect('Viewall/All_team')->with('success','Team member added');
    }
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $team= Team::find($id);
        if($team==null){
        return redirect('/Team')->with('error','There was a problem retrieving this team member from the database.');
           }else{
        return view('Team.show')->with('team',$team);
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
        $team = Team::find($id);
        return view('Team.edit')->with('team',$team); 
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
            'Name' =>'required|max:20',
            'Position'  => 'required',
            'Description' => 'required',
        ]);
          $team =Team::find($id);
          $team ->Name = $request->input('Name');
          $team ->Position = $request->input('Position');
          $team ->Description = $request->input('Description');
          $team->save();
          return redirect('Viewall/All_team')->with('success','Team info updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $team =Team::find($id);
        $counter=Team::all();
       //this checks if the selected entry to be deleted is actually present
     if($team==null){
        return redirect('/Team')->with('error','There was an error while deleting from the database, the error is now fixed.');
        }
        else{
            if(Storage::delete('public/team_pic/'.$team->picture)){
                $team->delete();
                return redirect('Viewall/All_team')->with('success','Team member Removed');
                }
        if(count($counter)<1){
         return redirect('/Team')->with('error','Team empty');   
        }
        else{
        return redirect('/')->with('error','Team memeber deleted');
       }
    }
    }

}

