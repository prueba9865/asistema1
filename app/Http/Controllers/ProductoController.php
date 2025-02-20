<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Producto;

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

        $producto = new Producto();
        $producto->codigo = "1234567890";
        $producto->descripcion = $request->input('nombre');
        $producto->precio = $request->input('precio');
        $producto->existencia = 0;
        $producto->activo = 1;
        $producto->save();
        return redirect()->route('productos.index')->with('success', 'Producto creado exitosamente');
        //print_r($request->all());
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $producto = Producto::find($id);
        return view('producto/edit', ['id' => $id, 'producto' => $producto]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $producto = Producto::find($id);
        $producto->descripcion = $request->input('nombre');
        $producto->precio = $request->input('precio');
        $producto->save();
        return redirect()->route('productos.index', ['id' => $id])->with('success', 'Producto editado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        /*DB::delete("DELETE FROM productos WHERE id = $id");
        $productos = DB::select("SELECT * FROM productos WHERE activo = 1");
        return view("producto/index", ['lista' => $productos]);*/

        $producto = Producto::find($id);
        $producto->delete();
        return redirect()->route('productos.index', ['id' => $id])->with('success', 'Producto eliminado correctamente');
    }
}
