<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cluster;
use App\Item;
use Illuminate\Support\Facades\Auth;

class ItemController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Item::all();
        return view("item/home",[
            "data" => $data
        ]);
    }

    public function recomendation(){
        $data = Item::where('cluster_id','=',Auth::user()->cluster_id)->get();
        // dd($data);
        return view("item/recomendation",[
            "data" => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('item/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Item::create([
            'name' => $request->name,
            'image' => $request->image,
            'description' => $request->description,
            'stock' => $request->stock,
            'cluster_id' => $request->cluster_id
        ]);

        return redirect('/item');
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
        $data = Item::where('id','=',$id)->first();
        return view('/item/edit',[
            'data' => $data
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
        $data = Item::where('id','=',$request->id)->first();
        Item::where('id','=',$request->id)->update([
            'stock' => $data->stock + $request->addStock
        ]);

        return redirect('/item');
    }

    public function deleteStock($id){
        $data = Item::where('id','=',$id)->first();
        return view('item/delete',[
            'data' => $data
        ]);
    }

    public function updateDeleteStock(Request $request){
        $data = Item::where('id','=',$request->id)->first();

        Item::where('id','=',$request->id)->update([
            'stock' => $data->stock - $request->deleteStock
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
        $item = Item::find($id);
        $item->forceDelete();

        return redirect('/item');
    }

    public function search()
    {
        return view('item/search');
    }

    public function hasilSearch(Request $request){
        $data = Item::where('sweetness','=',$request->sweetnessLevel,'and')->where(
        'spicy',"=",$request->spicyLevel, 'and')->where('malty',"=",$request->maltyLevel)->get();
        // $data = Item::where('sweetness','=',$request->sweetnessLevel);
        // dd($data);
        return view('/item/hasilSearch',[
            'data' => $data
        ]);
    }
}
