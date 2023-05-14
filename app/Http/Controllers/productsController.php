<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Stock;
use App\Models\Offer;
use App\Models\Category;
use Illuminate\Http\Request;
use Termwind\Components\Dd;

class ProductOutput extends Product
{
    public float $offerPrice;
}

class productsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        $stocks = Stock::all();
        $offers = Offer::all();
        $totalItems = count($products);

        /* dd($products); */
        return view('pages.store', compact('products', 'stocks', 'offers', 'totalItems'));
    }

    public function indexAdmin()
    {
        $products = Product::all();
        $stocks = Stock::all();
        $categories = Category::all();
        $offers = Offer::all();
        $totalItems = count($products);
        return view('admin.products.all', compact('products', 'stocks', 'categories', 'offers', 'totalItems'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        $offers = Offer::all();
        $product = new Product();
        $stock = new Stock();
        return view('admin.products.add', compact('categories', 'offers', 'product', 'stock'));
    }

    private function generateRandomString($length) {
        $characters = '123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[random_int(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'productName' => 'required',
            'stock' => 'required',
            'category' => 'required',
            'price' => 'required',
            'offer' => 'required',
        ]);


        $product = new Product();
        $stock = new Stock();

        $product -> SKU = $this -> generateRandomString(8);
        $product -> productName = $request -> get('productName');
        $product -> description = $request -> get('description');
        $product -> price = $request -> get('price');
        $product -> imageCode = '//';
        $product -> categoryID = $request -> get('category');
        $product -> offerID = $request -> get('offer');

        $stock -> productSKU = $product -> SKU;
        $stock -> quantity = $request -> get('stock');

        $product -> save();
        $stock -> save();

        $products = Product::all();
        $stocks = Stock::all();
        $categories = Category::all();
        $offers = Offer::all();
        $totalItems = count($products);
        return view('admin.products.all', compact('products', 'stocks', 'categories', 'offers', 'totalItems'));
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $product = Product::find($id);
        $category = Category::find($product->categoryID);
        $offer = Offer::find($product->offerID);
        $stocks = Stock::all();
        $stock = 0;
        foreach ($stocks as $item){
            if ($item->productSKU == $product->SKU)
                $stock = $item->quantity;
        }
        return view('admin.products.show', compact('product', 'offer', 'category', 'stock'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $product = new Product();
        foreach (Product::all() as $item) {
            if ($item->SKU == $id)
                $product = $item;
        }
        $stocks = Stock::all();
        $categories = Category::all();
        $offers = Offer::all();
        return view('admin.products.edit', compact('product', 'stocks', 'categories', 'offers'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $SKU = substr($request -> getQueryString(), 0, 8);
        $product = Product::find($SKU);
        $request->validate([
            'productName' => 'required',
            'stock' => 'required',
            'category' => 'required',
            'price' => 'required',
            'offer' => 'required',
        ]);

        $stocks = Stock::all();
        $stock = new Stock();
        foreach ($stocks as $item){
            if ($item->productSKU == $product->SKU)
                $stock = $item;
        }
        $product -> productName = $request -> get('productName');
        $product -> description = $request -> get('description');
        $product -> price = $request -> get('price');
        $product -> imageCode = '//';
        $product -> categoryID = $request -> get('category');
        $product -> offerID = $request -> get('offer');
        $stock -> quantity = intval(trim($request -> get('stock')));

        $product -> update();
        $stock -> update();

        $products = Product::all();
        $stocks = Stock::all();
        $categories = Category::all();
        $offers = Offer::all();
        $totalItems = count($products);
        return view('admin.products.all', compact('products', 'stocks', 'categories', 'offers', 'totalItems'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $stocks = Stock::all();
        $stock = new Stock();
        foreach ($stocks as $item){
            if ($item->productSKU == $product->SKU)
                $stock = $item;
        }
        $stock -> delete();
        $product -> delete();

        $products = Product::all();
        $stocks = Stock::all();
        $categories = Category::all();
        $offers = Offer::all();
        $totalItems = count($products);
        return view('admin.products.all', compact('products', 'stocks', 'categories', 'offers', 'totalItems'));
    }
}
