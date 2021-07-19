<?php

namespace App\Http\Controllers\Api;
use App\Models\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    private $product;

    public function __construct(Product $product){

        $this->product = $product;
    
    }

    public function index(){

        $products = Product::with('cidade')->get();

        if(!$products) {
            return response()->json(['msg' => 'Lista de produtos não encontrada'], 404);
        } else {
            $data = [$products];
            return $data;
        }
    }

    public function show($id){

        $product = Product::with('cidade')->find($id);

        if(!$product) {
            return response()->json(['msg' => 'Produto não encontrado'], 404);
        } else {
            $data = [$product];
            return response()->json($data);
        }
    }

    public function store(Request $request){

        try {

            $productData = $request->all();
            $this->product->create($productData);

            return response()->json(['msg' => 'Produto inserido com sucesso'], 201);
        } catch (\Exception $e){
            return response()->json(['msg' => 'Erro ao inserir produto']);
        }
    }

    public function update(Request $request, $id){

        try {
            
            $productData = $request->all();
            $product = Product::find($id);

            $product->update($productData);

            return response()->json(['msg' => 'Produto atualizado com sucesso'], 201);
        } catch (\Exception $e){
            return response()->json(['msg' => 'Erro ao atualizar produto']);
        }
    }

    public function delete(Product $id){

        try {

            $id->delete();

            return response()->json(['msg' => 'Produto removido com sucesso'], 201);
        } catch (\Exception $e){
            return response()->json(['msg' => 'Erro ao remover produto']);
        }

    }

}