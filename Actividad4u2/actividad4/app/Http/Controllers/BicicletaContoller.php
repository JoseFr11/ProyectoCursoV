<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bicicleta;

class BicicletaContoller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $todo = Bicicleta::all();
        return response()->json($todo,200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $newbicicleta = new Bicicleta(
            [
                'marca' => $request->get('marca'),
                'rodado' => $request->get('rodado'),
                'stock' => $request->get('stock'),
                'precio' => $request->get('precio')
            ]
        );
        $newbicicleta->save();
        return response()->json($newbicicleta,200);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $enseñar = Bicicleta::find($id);
        return response()->json($enseñar,200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $act = Bicicleta::find($id);
        $act->marca=$request->get('marca');
        $act->rodado=$request->get('rodado');
        $act->stock=$request->get('stock');
        $act->precio=$request->get('precio');
        $act->save();
        return response()->json($act,200);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $bicieli = Bicicleta::find($id);
        $bicieli->delete();
        return response()->json($bicieli,200);
    }
}
