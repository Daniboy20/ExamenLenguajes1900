<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Tipoasiento;
use Illuminate\Http\Request;

class TipoAsientoController extends Controller
{
    //

    public function home()
    { 
        $tipoAsientos= Tipoasiento::all();
      /*  $estado= $tipoAsientosAll->estado;
        $tipoAsientos= Tipoasiento::where('A',$estado)->get();
        */
       
        return view('tiposAsiento', compact('tipoAsientos'));
    }

    public function crear()
    {
        return view('agregarTipoAsiento');
    }

    public function actualizar(Request $request)
    {
        $nvotipoAsiento = new Tipoasiento();
        
        $nvotipoAsiento->idTipoAsiento;
        $nvotipoAsiento->descripcion = $request->input('descripcion');
        $nvotipoAsiento->precio = $request->input('precio');
        $nvotipoAsiento->estado = $request->input('estado');

        $nvotipoAsiento->save();
        return redirect('/tipoasiento');
    }

    public function editar($id)
    {
        $tipoAsiento = Tipoasiento::find($id);
        return view('editarAsiento', compact('tipoAsiento'));
    }

    public function editarnvo(Request $request,$id)
    {
        $tipoAsiento = Tipoasiento::find($id);
        $tipoAsiento->descripcion = $request->input('descripcion');
        $tipoAsiento->precio = $request->input('precio');
        $tipoAsiento->estado = $request->input('estado');

        $tipoAsiento->save();
        return redirect('/tipoasiento');
        

    }
}
