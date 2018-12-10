<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Contact;
use Mail;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth',['except'=>['create','store']]);
    }

    public function index()
    {
    $messages = Contact::orderby('created_at','desc')->get();
        return view('contact.index')->with('messages',$messages);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contact.create');
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
            'email' => 'required|email',
            'subject' => 'required|min:5',
            'body' => 'required|max:700',
        ]);
       $mail = new Contact;
       $mail ->email = $request->input('email');
       $mail->subject =$request->input('subject');
       $mail ->body = $request->input('body');
       $data = array(
       'email' => $request->email,
       'subject' => $request->subject,
       'body' =>$request->body,
          );
       Mail::send('email.contact', $data, function($message) use ($data){
           $message->from($data['email']);
           $message->subject($data['subject']);
           $message->to('tomennis1997@gmail.com');
       });
        $mail ->save();
        return redirect('/contact/create')->with('success',$request->input('email').' your message is sent');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $inbox = Contact::all();
        $mail = Contact::find($id);
        if($mail==null){
            return redirect('/contact')->with('error','Sorry this mail is not in the database any more')->with('inbox',$inbox);
        }else{
            return view('contact/show')->with('mail',$mail)->with('inbox',$inbox);
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
        $message= Contact::find($id);
        $counter = Contact::all();
        //this checks if the selected entry to be deleted is actually present
     if($message==null){
        return redirect('/')->with('error','There was an error while deleting from the database, the error is now fixed.');
        }
        else{
         $message->delete();
        if(count($counter)<1){
         return redirect('/contact')->with('error','Your inbox is empty');
        }
        else{
        return redirect('/contact')->with('error','Message deleted');
       }
    }
    }
    //This is clear all of the messages from your inbox and also the database..
    public function clearAll(){
    $delete = Contact::truncate();
    return view('/contact')->with('error','Inbox cleared');

    }

    // this is the search function
     public function Search(Request $request){
         $this->validate($request,[
             'search'=>'required',
         ]);
    $search= $request->input('search');
    $results = DB::table('contacts')->where('email','LIKE','%'.$search.'%')->orderby('created_at','desc')->get();
     if(count($results)<1){
         return redirect('/contact')->with('error','No results');
     }
     else{
     return view('contact.Search')->with('results',$results);
         }
    }
}
