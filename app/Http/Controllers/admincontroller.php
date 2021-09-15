<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\Contact;
use  App\Models\User;
use  App\Models\Desine;
use  App\Models\Talab;
use  App\Models\Baqa;
use  App\Models\Programe;
use  App\Models\Tasweq;
use App\Models\Ved;
use App\Models\Part;
use Auth;
use Route;
use DB;
use Carbon\Carbon;
use Datatables;

class admincontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function showcontact()
    {
        $contacts=Contact::all();

        return view('admindashboard.showcontact',compact('contacts'));
    }
    public function showbaqa1()
    {
       
        return view('backend.baqa');
    }   
    public function showbaqa()
    {
        $users=Baqa::all();

        return view('backend.managebaqa',compact('users'));
    }

    public function showtas1()
    {
       
        return view('backendt.tas');
    }   
    public function showtas()
    {
        $users=Tasweq::all();

        return view('backendt.managetas',compact('users'));
    }
    
    public function showv1()
    {
       
        return view('backendv.ve');
    }   
    public function showpart()
    {
       
        return view('index');
    }   
    public function showv()
    {
        $users=Ved::all();

        return view('backendv.managev',compact('users'));
    }
    public function index3()
    {
        $users=Ved::all();

        return view('index',compact('users'));
    }

    public function showprog1()
    {
       
        return view('backendp.prog');
    }   
    public function showprog()
    {
        $users=Programe::all();

        return view('backendp.manageprog',compact('users'));
    }

    public function showuser()
    {
        $users=Part::all();

        return view('admindashboard.manageusers',compact('users'));
    }
    
    public function showdesine()
    {
        $desine=Desine::all();

        return view('admindashboard.manageid',compact('desine'));
    }
    public function showtalab()
    {
        $desine=Talab::all();
        return view('admindashboard.managetalab',compact('desine'));
    }

    public function dash(){
        $sum = DB::table('Parts')->select(DB::raw('*'))
        ->whereRaw('Date(created_at) >=  NOW()-INTERVAL 30 DAY')->count();

        $sumd = DB::table('Parts')->select(DB::raw('*'))
        ->whereRaw('Date(created_at) = CURDATE()')->count();

        $sumy =  DB::table('Parts')->select(DB::raw('*'))
        ->whereRaw('Date(created_at) = CURDATE() - 1')->count();



        $sum1 = DB::table('talabs')->select(DB::raw('*'))
        ->whereRaw('Date(created_at) >=  NOW()-INTERVAL 30 DAY')->count();

        $sumd1 = DB::table('talabs')->select(DB::raw('*'))
        ->whereRaw('Date(created_at) = CURDATE()')->count();

        $sumy1 =  DB::table('talabs')->select(DB::raw('*'))
        ->whereRaw('Date(created_at) = CURDATE() - 1')->count();

        return view('home',compact('sum','sumd','sumy','sum1','sumd1','sumy1'));
        
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
    public function storebaqa(Request $request)
    {
       
          $this->validate($request,[
              'name'=>'required|max:250',
              'price'=>'required|max:10',
              'detale'=>'required|max:250',
              
                  ]);
             
  
          Baqa::create([
             
              "name"=>$request->name,
              "price"=>$request->price,
              "detale"=>$request->detale,
             

          ]);
                    return redirect()->back();
       
    }
    public function storepart(Request $request)
    {
       
        
          Part::create([
             
              "email"=>$request->email,
              

          ]);
                    
          return back()->with('success','تم الاشتراك بنجاح  !');
    }

    public function storeprog(Request $request)
    {
        if($request->hasFile('photo')){

            $file=$request->photo;
            $new_file=time().$file->getClientOriginalName();
            $file->move('storage/prog-imgs',$new_file);
        }
          Programe::create([

           
              "name"=>$request->name,
              "photo"=>'/storage/prog-imgs/'.$new_file,
              "detale"=>$request->detale,
              

          ]);
                    return redirect()->back();
       
    }

    public function storev(Request $request)
    {
        if($request->hasFile('vedo')){

            $file=$request->vedo;
            $new_file=time().$file->getClientOriginalName();
            $file->move('storage/vedo-imgs',$new_file);
        }
          Ved::create([

           
             
              "vedo"=>'/storage/vedo-imgs/'.$new_file,
             
              

          ]);
                    return redirect()->back();
       
    }

    public function storetas(Request $request)
    {
        if($request->hasFile('photo')){

            $file=$request->photo;
            $new_file=time().$file->getClientOriginalName();
            $file->move('storage/tas-imgs',$new_file);
        }
          Tasweq::create([

           
              "name"=>$request->name,
              "photo"=>'/storage/tas-imgs/'.$new_file,
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
        $data=Desine::find($id);
        return view('admindashboard.manageid',compact('data'));
    }
   
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function usersedit($id)
    {
        $data=Part::find($id);
        return view('admindashboard.editusers',compact('data'));
    }

    public function baqaedit($id)
    {
        $data=Baqa::find($id);
        return view('backend.editbaqa',compact('data'));
    }
    public function progedit($id)
    {
        $data=Programe::find($id);
        return view('backendp.editprog',compact('data'));
    }

    public function vedit($id)
    {
        $data=Ved::find($id);
        return view('backendv.editv',compact('data'));
    }

    public function tasedit($id)
    {
        $data=Tasweq::find($id);
        return view('backendt.edittas',compact('data'));
    }

    public function editdesine($id)
    
    {
        $data=Desine::find($id);
        return view('admindashboard.editid',compact('data'));
    }
    public function edittalab($id)
    
    {
        $data=Talab::find($id);
        return view('admindashboard.edittalab',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function usersupdate(Request $request, $id)
    {
        $users=Part::find($id);
   
    
    $users->email=$request->email;
   
    $users->update();
    return redirect()->route('seeusers');
    }

    public function baqaupdate(Request $request, $id)
    {
        $users=Baqa::find($id);
   
    $users->name=$request->name;
    $users->price=$request->price;
    $users->detale=$request->detale;
   
    $users->update();
    return redirect()->route('show.baqa');
    }

    public function progupdate(Request $request, $id)
    {
     
        $users=Programe::find($id);
        if($request->hasFile('photo'))
        {
    
            $file=$request->photo;
            $new_file=time().$file->getClientOriginalName();
            $file->move('storage/prog-imgs',$new_file);
    
            $users->photo='/storage/prog-imgs/'.$new_file;
        }
    
    $users->name=$request->name;
    $users->detale=$request->detale;
   
    $users->update();
    return redirect()->route('show.prog');
        
       
    }

    public function vupdate(Request $request, $id)
    {
     
        $users=Ved::find($id);
        if($request->hasFile('vedo'))
        {
    
            $file=$request->vedo;
            $new_file=time().$file->getClientOriginalName();
            $file->move('storage/vedo-imgs',$new_file);
    
            $users->vedo='/storage/vedo-imgs/'.$new_file;
        }
    
   
   
    $users->update();
    return redirect()->route('show.v');
        
       
    }

    public function tasupdate(Request $request, $id)
    {
     
        $users=Tasweq::find($id);
        if($request->hasFile('photo'))
        {
    
            $file=$request->photo;
            $new_file=time().$file->getClientOriginalName();
            $file->move('storage/tas-imgs',$new_file);
    
            $users->photo='/storage/tas-imgs/'.$new_file;
        }
    
    $users->name=$request->name;
    $users->detale=$request->detale;
    
    $users->update();
    return redirect()->route('show.tas');
        
       
    }

    public function updatedesine(Request $request, $id)
    {
        $desine=Desine::find($id);
    if($request->hasFile('photo'))
    {

        $file=$request->photo;
        $new_file=time().$file->getClientOriginalName();
        $file->move('storage/car-imgs',$new_file);

        $desine->photo='/storage/car-imgs/'.$new_file;
    }

    
    $desine->title=$request->title;
    $desine->detale=$request->detale;
    
    $desine->update();
    return redirect()->route('show.desine');
    }

    public function updatetalab(Request $request, $id)
    {
    $desine=Talab::find($id);
    
    $desine->serves=$request->serves;
    $desine->name=$request->name;
    $desine->commerc_name=$request->commerc_name;
    $desine->mob=$request->mob;
    $desine->detale=$request->detale;
    
    $desine->update();
    return redirect()->route('show.talab');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function desinedestroy($id)
    {
    $desine = Desine::find($id);
    $desine->delete($id) ;
    return redirect()->route('show.desine');
    }
    public function talabdestroy($id)
    {
    $desine = Talab::find($id);
    $desine -> delete($id);
    return redirect()->route('show.talab');
    }
    public function userdestroy($id)
    {
     $user=Part::find($id);
     $user->delete($id) ;
     return redirect()->route('seeusers');
    }
    public function baqadestroy($id)
    {
     $user=Baqa::find($id);
     $user->delete($id) ;
     return redirect()->route('show.baqa');
    }

    public function progdestroy($id)
    {
     $user=Programe::find($id);
     $user->delete($id) ;
     return redirect()->route('show.prog');
    }

    public function tasdestroy($id)
    {
     $user=Tasweq::find($id);
     $user->delete($id) ;
     return redirect()->route('show.tas');
    }

    public function vdestroy($id)
    {
     $user=Ved::find($id);
     $user->delete($id) ;
     return redirect()->route('show.v');
    }
}
