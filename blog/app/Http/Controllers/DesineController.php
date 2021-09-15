<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Desine;
use App\Models\Contact;
use App\Models\Talab;
use App\Models\Baqa;
use App\Models\Programe;
use App\Models\Tasweq;
use App\Models\Ved;
use Auth;

class DesineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   
    
    public function index1()
    {
        $desine = Desine::all();
        $users = Ved::all();
        return view('index',compact('desine','users'));
        
    }
    

    public function index()
    {
        $users = Ved::all();
        return view('index',compact('users'));
        
    }
    public function id()
    {
        $users = Baqa::all();
        return view('id',compact('users'));
    }
    public function program()
    {
        $users = Programe::all();
        return view('program',compact('users'));
    }
    public function tasweq()
    {
        $users = Tasweq::all();
        return view('tasweq',compact('users'));
    }
   
    public function talab()
    {
        return view('talab');
    }

    public function adpro()
    {
        return view('admin.add_prod');
    }

    public function sendemaile()
    {
        return view('sendmail');
    }

    public function adtalab()
    {
        return view('talab');
    }

    public function showcontact()
    {
       $contacts=Contact::all();
        return view('admindashboard.showcontact',compact('contacts'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->hasFile('photo'))
        {
  
            $file=$request->photo;
            $new_file=time().$file->getClientOriginalName();
            $file->move('storage/car-imgs',$new_file);
        }
        
            Desine::create([
              
                "title"=>$request->title,
                "detale"=>$request->detale,
                "photo"=>'/storage/car-imgs/'.$new_file,
            ]);
                      return redirect()->back();
        
  
      }

    public function contactstore(Request $request)
      {
          $this->validate($request,[
          'name'=>'required|max:100',
          'email'=>'required',
          'msg'=>'required|max:250',
          ]);
        Contact::create([
              
            "name"=>$request->name,
            "email"=>$request->email,
            "msg"=>$request->msg,
        ]);
                  return redirect()->back();
      }
  
      public function talabstore(Request $request)
      {
        $this->validate($request,[
            'serves'=>'required|max:100',
            'name'=>'required|max:100',
            'commerc_name'=>'required|max:100',
            
                'mob'=>'required|max:14',
                'email'=>'required',
                'detale'=>'required|max:250',
                ]);
           

        Talab::create([
            "serves"=>$request->serves,
            "name"=>$request->name,
            "commerc_name"=>$request->commerc_name,
            "mob"=>$request->mob,
            "email"=>$request->email,
            "detale"=>$request->detale,
        ]);
                  return redirect()->back();
      }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        //
    }

    public function logout(){
        Auth::logout();
        return view('auth.login');
    }
}
