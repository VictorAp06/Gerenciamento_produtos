<?php

namespace App\Http\Controllers\Api;
use App\Models\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function __construct(Product $product){
        $this->product = $product;
    }

    public function index(){
        return \App\Models\Product::all();
    }

    public function show($id){
        
        $product = $this->product->find($id);

        if(!$product) {
            return response()->json(['data' => ['msg' => 'Produto não encontrado']], 404);
        } else {
            $data = ['data' => $product];
            return response()->json($data);
        }

    }

}