<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Jenssegers\Agent\Agent;
use App\Models\ProductClick;
use Illuminate\Http\Request;
use App\Models\ProductDetail;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;


class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $products = \App\Models\Product::with([
            'productDetails', // relasi ke detail produk
            'productClick'
        ])
            ->withCount('clicks') // hitung jumlah klik per produk
            // ->orderByDesc('clicks_count') // urutkan dari yang paling banyak diklik
            ->get();
        // dd($products);

        return view('pages.landingpage', compact('products'));
    }

    public function singleProduct($slug)
    {
        $product = Product::where('slug', $slug)->with('productDetails', 'obatCategory', 'productCategory')->firstOrFail();
        // dd($product);
        $productserupa = Product::where('product_category_id', $product->product_category_id)
            ->with('productDetails', 'obatCategory')
            ->where('id', '!=', $product->id) // Exclude the current product
            ->get();

        $agent = new Agent();
        ProductClick::create([
            'product_id' => $product->id,
            'device'   => $agent->device() ?: 'Unknown',
            'platform' => $agent->platform() ?: 'Unknown',
            'browser'  => $agent->browser() ?: 'Unknown',
        ]);
        // dd($agent);
        return view('pages.single-product', compact('product', 'productserupa'));
    }
    public function product()
    {
        $products = \App\Models\Product::with([
            'productDetails', // relasi ke detail produk
            'productClick'
        ])
            ->withCount('clicks') // hitung jumlah klik per produk
            // ->orderByDesc('clicks_count') // urutkan dari yang paling banyak diklik
            ->get();
        return view('pages.product', compact('products'));
    }
    public function search(Request $request)
    {
        $q = $request->q;
        $products = \App\Models\Product::with([
            'productDetails', // relasi ke detail produk
            'productClick'
        ])
            ->withCount('clicks') // hitung jumlah klik per produk
            ->where('product_name', 'LIKE', "%$q%")
            // ->orderByDesc('clicks_count') // urutkan dari yang paling banyak diklik
            ->get();
        if ($products->isEmpty()) {
            return redirect()->route('pages.notfound');
        }
        // dd($products);
        return view('pages.product', compact('products', 'q'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
