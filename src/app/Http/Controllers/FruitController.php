<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Season;
use App\Http\Requests\ProductRequest;

class FruitController extends Controller
{
    public function index(){
        $products = Product::with('seasons')->Paginate(6);
        return view('index', ['keyword' => ''], compact('products'));
    }
    
    public function search(Request $request){
        $products = Product::where('name', 'LIKE',"%{$request->keyword}%")->paginate(6);
        $param = [
            'keyword' => $request->keyword,
            'products' => $products
        ];
        return view ('index', $param);
    }
    
    public function edit(Request $request){
        $products = Product::with('seasons')->find($request->id);
        return view ('update', compact('products'));
    }

    public function update(ProductRequest $request){
        $form =$request->all();
        unset($form['_token']);
        Product::find($request->id)->update($form);
        return redirect('index');
    }

    public function create(){
        return view ('add');
    }

    public function store(ProductRequest $request){
        $image = $request->file('image')->store('public');

        $product = new Product();
        $inputs = request();
        $product->name=$inputs['name'];
        $product->price=$inputs['price'];
        $product->image = basename($image);
        $product->description=$inputs['description'];
        $product->save();

        $seasonId=$inputs['season'];
        $product->seasons()->attach($seasonId);
        return back()->withInput();

    }
}

