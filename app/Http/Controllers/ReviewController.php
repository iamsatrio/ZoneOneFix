<?php

namespace App\Http\Controllers;

use App\DetailTransaction;
use App\Review;
use App\Transaction;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $review = Review::all();
        return view('admin.new.review', compact('review'));
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
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $review = Review::where('user_id', $request->user_id)->where('product_id', $request->product_id)->first();

        if (empty($review)) {
            Review::create([
                'product_id' => $request->product_id,
                'user_id' => $request->user_id,
                'review' => $request->review,
                'rating' => $request->rating,
            ]);
            return redirect(url()->previous())->with('success', 'Review has been submited');
        } else {
            return redirect(url()->previous())->with('error', 'You have been review this product');
        }


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Review $review
     * @return \Illuminate\Http\Response
     */
    public function show(Review $review)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Review $review
     * @return \Illuminate\Http\Response
     */
    public function edit(Review $review)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Review $review
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Review $review)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Review $review
     * @return \Illuminate\Http\Response
     */
    public function destroy(Review $review)
    {
        //
    }
}
