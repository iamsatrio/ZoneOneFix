<?php

namespace App\Http\Controllers;

use App\Product;
use App\ProductCategory;
use Illuminate\Http\Request;

class ProductCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = 'All Products';
        $products = Product::all();
        $categories = ProductCategory::all();
        return view('category', compact(['category','products','categories']));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ProductCategory $productCategory
     * @return \Illuminate\Http\Response
     */
    public function show(ProductCategory $productCategory)
    {
        $category = $productCategory->name;
        $products = Product::where('category_id', $productCategory->id)->get();
        $categories = ProductCategory::all();
        return view('category', compact(['category','products','categories']));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ProductCategory $productCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(ProductCategory $productCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\ProductCategory $productCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProductCategory $productCategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ProductCategory $productCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProductCategory $productCategory)
    {
        //
    }
}
