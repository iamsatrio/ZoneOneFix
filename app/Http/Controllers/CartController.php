<?php

namespace App\Http\Controllers;

use App\ProductCategory;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Storage;
use App\ProductImage;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //dd(Cart::content());
        $categories = ProductCategory::all();
        return view('cart',compact('categories'));
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
        //        
        //dd($request->image);
        $duplicates = Cart::search(function ($cartItem, $rowId) use ($request){
            return $cartItem->id === $request->id;
        });
          
        if ($duplicates->isNotEmpty()) {
            return redirect()->route('cart.index')->with('success_message', 'Item is Already in your cart');
        }

        //Cart::add($request->id, $request->name, $request->qty, $request->price, $request->image);
        // ->associate('App\Product')
        Cart::add(array('id'=>$request->id, 'name'=>$request->name, 'qty'=>$request->qty, 'price'=>$request->price-$request->discount, 'options' => ['image'=>$request->image]))->associate('App\Product');

        //$request->id, $request->name, $request->qty, $request->price, $request->image
        return redirect()->route('cart.index')->with('success_message', 'Item Successfully Added');
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
        Cart::remove($id);

        return back()->with('success_message','Item remove');
    }

    public function destroyall(Cart $cart)
    {
        //
        Cart::destroy();

        return back()->with('success_message','All Items Successfully Removed');
    }

    public function updateCart($id, $qty){
        Cart::update($id,$qty);

        session()->flash('success_message','Quantity was updated successfully !');
        return response()->json(['success'=>true]);
    }
}
