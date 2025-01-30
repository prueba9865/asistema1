<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductoController extends Controller
{
    public function index(){
        $productos = DB::select("SELECT * FROM productos WHERE activo = 1");
        return view("producto/index", ['lista' => $productos]);
    }

    public function show($id = null){
        if($id == null){
            return "NO existe el producto";
        }
        return view("producto/show", ['id' => $id]);
    }

    public function create(){
        return view("producto/create");
    }

    public function store(Request $request){
        print_r($request->all());
    }
}
