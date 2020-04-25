<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Cart;
use App\Item;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = Auth::user()->id;
        $data = Cart::where('user_id','=',$id)->get();
        $status = false;
        // dd($data);
        if($data){
            $status = true;
        }
        return view('/cart/home ',[
            'data' => $data,
            'status' => $status
        ]);
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
        // dd(Auth::user()->id);
        Cart::create([
            'user_id' => Auth::user()->id,
            'item_id' => $request->item_id,
            'qty' => $request->qty,
            'totalPrice' => ($request->item_price*$request->qty)
        ]);

        // $item = Item::where('id','=',$request->item_id)->first();
        // $item->stock = $item->stock-$request->qty;
        // Item::save();
            // dd((int)$request->qty);
            $minusStock = (int)$request->qty;
        $data = Item::where('id','=',$request->item_id)->first();
            // dd(Item::select('stock')->where('id','=',$request->item_id)->first());
        Item::where('id','=',$request->item_id)->first()->update([
            'stock' => $data->stock - $minusStock
        ]);

        return redirect('/cart');
    }

    public function checkout(){
        // $data = Item::where('user_id','=',Auth::user()->id)->get();
        $cart = Cart::where('user_id','=',Auth::user()->id)->get();
        $totalPrice = 0;
        foreach($cart as $c){
            $totalPrice = $totalPrice + $c->totalPrice;
        }
        return view('cart/checkout',[
            'data' => $cart,
            'totalPrice' => $totalPrice
        ]);
    }

    public function checkoutSuccess(){
        // $department = Department::find($id);
        // $department->forceDelete();
        $cart = Cart::where('user_id','=',Auth::user()->id);
        $cart->forceDelete();

        // return redirect('/department');
        return view('cart/successBack');
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
}
