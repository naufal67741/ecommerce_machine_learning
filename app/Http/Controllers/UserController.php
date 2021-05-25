<?php

namespace App\Http\Controllers;

use App\Item;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = User::all();
        return view('index/home',[
            "data" => $data
        ]);
    }

    public function register(){
        return view('index/register2');
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
        // dd($request);
        // dd($request->profile_image);
        // dd($request->image->getClientOriginalName());
        $user = new User();
        // $fileNameToStore='';
        // if($request->file('image')){
        //     $fileNameWithExt = $request->file('image')->getClientOriginalName();
        //     // dd($request->file('image'));
        //     $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
        //     $extension = $request->file('image')->getClientOriginalExtension();
        //     $fileNameToStore = $filename.'_'.time().'.'.$extension;
        //     $path = $request->file('image')->storeAs('public/images/user',$fileNameToStore);
        //     // $file->move('uploads/user/profileImage',$filename);
        //     // dd($filename);
        // }
        // dd($request->cluster_id);
        User::create([
            'name' => $request->name,
            'email'=>   $request->email,
            'password'=>$request->password,
            'phone' => $request->phone,
            // 'image' => $fileNameToStore,
            // 'cluster_id' => $request->cluster_id
        ]);

        return redirect('user/login');
    }

    public function setFavorite(Request $request)
    {
        // dd($request);
        $user = User::where('id','=',Auth::user()->id)->first();
        $user->update([
            'cluster_id' => $request->id
        ]);

        return redirect('/item/recomendation');

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
        $data = User::where('id','=',$id)->first();
        return view('user/edit',[
            "data" => $data
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $user = new User();
        // $fileNameToStore='';
        // if($request->file('image')){
        //     $fileNameWithExt = $request->file('image')->getClientOriginalName();
        //     // dd($request->file('image'));
        //     $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
        //     $extension = $request->file('image')->getClientOriginalExtension();
        //     $fileNameToStore = $filename.'_'.time().'.'.$extension;
        //     $path = $request->file('image')->storeAs('public/images/user',$fileNameToStore);
        // }
        User::where('id','=',$request->id)->update([
            'name' => $request->name,
            'phone' => $request->phone,
            // 'cluster_id' => $request->cluster_id
        ]);
        return redirect('/item');
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
}
