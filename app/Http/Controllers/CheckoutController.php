<?php

namespace App\Http\Controllers;

use App\DetailTransaction;
use App\ProductCategory;
use App\Shipment;
use App\Transaction;
//use Gloudemans\Shoppingcart\Cart;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;

class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = ProductCategory::all();
        return view('checkout', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $shipping_price = old('shipping_price');
        $shipping_cost = old('shipping_cost');
        $shipping_method = old('shipping_method');
        $categories = ProductCategory::all();
        $provinces = \App\Model\Province::all();
        return view('checkout', compact(['provinces', 'shipping_method', 'shipping_price', 'shipping_cost', 'categories']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'checkout_name' => 'required',
            'checkout_address' => 'required',
            'checkout_phone' => 'required',
            'checkout_email' => 'required',
            'checkout_province' => 'required',
            'checkout_city' => 'required',
            'checkout_district' => 'required',
            'checkout_village' => 'required',
            'checkout_zipcode' => 'required',
            'shipping_method' => 'required',
            'shipping_cost' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect(route('checkout.create'))->withErrors($validator)->withInput($request->input());
        } else {
            $code = mt_rand();

            $total = Cart::total(null, null, '');
            if ($request->shipping_cost == 0) {

                //Input Transaksi
                Transaction::create([
                    'user_id' => Auth::user()->id,
                    'payment_method' => 'Personal pickup',
                    'total' => $total,
                    'code'=>$code,
                ]);

                $maxTransaction = Transaction::max('id');

                //Input Detail Transaction
                foreach (Cart::content() as $item) {
                    DetailTransaction::create([
                        'product_id' => $item->id,
                        'user_id' => Auth::user()->id,
                        'transaction_id' => $maxTransaction,
                        'qty' => $item->qty,
                        'price' => $item->price - $item->discount,
                        'subtotal' => $item->subtotal,
                    ]);
                }

                Cart::destroy();


                //Input Shipment
                Shipment::create([
                    'name' => $request->checkout_name,
                    'address' => $request->checkout_address,
                    'phone' => $request->checkout_phone,
                    'email' => $request->checkout_email,
                    'transaction_id' => $maxTransaction,
                    'province_id' => $request->checkout_province,
                    'regency_id' => $request->checkout_city,
                    'district_id' => $request->checkout_district,
                    'village_id' => $request->checkout_village,
                    'zipcode' => $request->checkout_zipcode,
                    'shipping_method' => $request->shipping_method,
                    'shipping_cost' => $request->shipping_cost,
                ]);

            } else {

                //Input Transaksi
                Transaction::create([
                    'user_id' => Auth::user()->id,
                    'payment_method' => 'Bank Transfer',
                    'total' => $total,
                    'code'=>$code,
                ]);

                $maxTransaction = Transaction::max('id');

                //Input Detail Transaction
                foreach (Cart::content() as $item) {
                    DetailTransaction::create([
                        'product_id' => $item->id,
                        'user_id' => Auth::user()->id,
                        'transaction_id' => $maxTransaction,
                        'qty' => $item->qty,
                        'price' => $item->price - $item->discount,
                        'subtotal' => $item->subtotal,
                    ]);
                }

                Cart::destroy();


                //Input Shipment
                Shipment::create([
                    'name' => $request->checkout_name,
                    'address' => $request->checkout_address,
                    'phone' => $request->checkout_phone,
                    'email' => $request->checkout_email,
                    'transaction_id' => $maxTransaction,
                    'province_id' => $request->checkout_province,
                    'regency_id' => $request->checkout_city,
                    'district_id' => $request->checkout_district,
                    'village_id' => $request->checkout_village,
                    'zipcode' => $request->checkout_zipcode,
                    'shipping_method' => $request->shipping_method,
                    'shipping_cost' => $request->shipping_cost,
                ]);
            }
            $transaction = Transaction::find($maxTransaction);
            return redirect(route('transaction.show', $transaction))->with('success', 'Order will be proceded when you have pay the bills');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function pages(Request $request)
    {
        $shipping_price = $request->shipping_price;
        $shipping_cost = $request->shipping_cost;
        $shipping_method = $request->shipping_method;
        $categories = ProductCategory::all();
        $provinces = \App\Model\Province::all();
        return view('checkout', compact(['provinces', 'shipping_method', 'shipping_price', 'shipping_cost', 'categories']));
    }
}
