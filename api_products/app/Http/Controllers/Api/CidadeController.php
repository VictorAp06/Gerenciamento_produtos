<?php

namespace App\Http\Controllers\Api;
use App\Models\Cidade;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CidadeController extends Controller
{
    public function __construct(Cidade $cidade){

        $this->cidade = $cidade;
    
    }

    public function index(){

        $cidades = $this->cidade->all();

        if(!$cidades) {
            return response()->json(['data' => ['msg' => 'Lista de cidades não encontrada']], 404);
        } else {
            $data = ['data' => $cidades];
            return response()->json($data);
        }
    }
}
