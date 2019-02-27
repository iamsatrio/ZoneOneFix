<?php

namespace App\Http\Controllers;

use App\DetailTransaction;
use App\Product;
use App\ProductCategory;
use App\ProductImage;
use App\Review;
use App\Transaction;
use App\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        //
        $products = Product::all();
        $categories = ProductCategory::all();
        return view('admin.new.product.index', compact(['products', 'categories']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categories = ProductCategory::all();
        return view('admin.new.product.create', compact('categories'));
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
        //
        //dd($request);
        if ($request->hasFile('image')) {
            //dd('gambar ada');
            $gambar_produk = $request->file('image');
            $input['image'] = Storage::disk('public')->put('products', $gambar_produk);
            Product::create([
                'name' => $request->name,
                'price' => $request->price,
                'image' => $input['image'],
                'description' => $request->description,
                'category_id' => $request->category_id,
                'stock' => $request->stock,
                'discount' => $request->discount
            ]);

            if ($request->hasFile('product_images')) {
                $multiple_images = $request->file('product_images');
                $last_product = Product::orderBy('id', 'desc')->first();
                foreach ($multiple_images as $key) {
                    $input['product_image'] = Storage::disk('public')->put('product_images', $key);
                    ProductImage::create([
                        'product_id' => $last_product->id,
                        'images' => $input['product_image']
                    ]);
                }
            }

        } else {
            Product::create([
                'name' => $request->name,
                'price' => $request->price,
                'description' => $request->description,
                'category_id' => $request->category_id,
                'stock' => $request->stock,
                'discount' => $request->discount
            ]);

            if ($request->hasFile('product_images')) {
                $multiple_images = $request->file('product_images');
                $last_product = Product::orderBy('id', 'desc')->first();
                foreach ($multiple_images as $key) {
                    $input['product_image'] = Storage::disk('public')->put('product_images', $key);
                    ProductImage::create([
                        'product_id' => $last_product->id,
                        'images' => $input['product_image']
                    ]);
                }
            }
        }


        return redirect()->route('product.index')->with('success', 'created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        $transaction = null;
        if(!empty(Auth::user())){
            $transaction = DetailTransaction::where('user_id', Auth::user()->id)->where('product_id', $product->id)->first();
            $reviews = Review::where('product_id',$product->id)->get();
            $review = Review::where('user_id',Auth::user()->id)->first();

            $categories = ProductCategory::all();
            $products = Product::limit(4)->get();
            $multiple_images = ProductImage::where('product_id', $product->id)->limit(4)->get();
            return view('product', compact(['product', 'products', 'multiple_images', 'categories','transaction','reviews','review']));
        }else{

            $reviews = Review::where('product_id',$product->id)->get();
            $categories = ProductCategory::all();
            $products = Product::limit(4)->get();
            $multiple_images = ProductImage::where('product_id', $product->id)->limit(4)->get();
            return view('product', compact(['product', 'products', 'multiple_images', 'categories','transaction','reviews']));
        }


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Product $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
        // dd($request);
        if ($request->hasFile('image')) {
            // dd('gambar ada');
            $gambar_produk = $request->file('image');
            // dd($gambar_produk->getClientOriginalName());
            $input['image'] = Storage::disk('public')->put('products', $gambar_produk);

            $product->update([
                'name' => $request->name,
                'price' => $request->price,
                'image' => $input['image'],
                'description' => $request->description,
                'stock' => $request->stock,
                'category_id' => $request->category_id,
                'discount' => $request->discount
            ]);

        } else {
            // dd('gambar tidak ada');
            $product->update([
                'name' => $request->name,
                'price' => $request->price,
                'description' => $request->description,
                'stock' => $request->stock,
                'category_id' => $request->category_id,
                'discount' => $request->discount
            ]);

        }

        return redirect()->route('product.index')->with('success', 'updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('product.index')->with('success', 'deleted');
    }

    public function welcome(Product $product)
    {
        $products = Product::all();
        $categories = ProductCategory::all();
        $carousel = Banner::where('category','carousel')->get();
        $banner1 = Banner::where('category','banner1')->first();
        $banner2 = Banner::where('category','banner2')->first();
        $footer = Banner::where('category','footer')->first();
        return view('index', compact(['products', 'categories','carousel','banner1','banner2','footer']))->with('success', 'Order will be proceded when you have pay the bills');
    }

    public function dashboard(Product $product)
    {
        if (empty(Auth::user())) {
            return redirect()->route('products');
        } else {
            if (Auth::user()->role == 'user') {
                return view('user.index');
            } else {
                $products = Product::all();
                return view('admin.new.index', compact('products'));
            }
        }

    }
    public function sales(){
        $result = DB::table('transactions')
//            ->select(DB::raw('DATE_FORMAT(created_at, "%d %M %Y") as day, (SUM(total)/1000000) as omzet'))
            ->select(DB::raw('DATE_FORMAT(created_at, "%d %M %Y %H %i %s ") as day, (SUM(total)/1000000) as omzet'))
            ->groupBy('day')
            ->get();

        return response()->json($result);
    }

    public function topProduct(){
        $result = DB::table('detail_transactions')
            ->join('products','products.id','=','detail_transactions.product_id')
            ->join('transactions','transactions.id','=','detail_transactions.transaction_id')
            ->select(DB::raw('SUM(qty) as sales,products.name as product'))
//            ->where('transactions.status','=','Confirmed')
            ->groupBy('product')
            ->get();

        return response()->json($result);
    }

    public function search(Request $request){
//        $result = DB::table('products')
//            ->join('product_categories', 'product_categories.id', '=', 'products.category_id')
//            ->where('products.name','LIKE',"%$request->product%")
//            ->orWhere('product_categories.name','LIKE',"%$request->product%")->get();
        $result = Product::where('name','LIKE',"%$request->product%")->get();
$categories = ProductCategory::all();
        return view('search',compact(['result','categories']));
    }
}
