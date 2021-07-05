<?php

namespace App\Http\Controllers;
use App\Models\Inicio;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;


class ControllerInicio extends Controller
{
    function salvaInicio (Request $request){
        $data=$request->except(["_token"]);
        $dados=Inicio::create($data);

        return redirect("/admin/inicio")->with("Done", "Salvo com sucesso");
    }

    function editInicio(Request $request){
        $id = $request->input('id');

        $inicio = Inicio::find($id);
 
        return view('inicio.edit')->with("inicio", $inicio);
    }

    function updateInicio(Request $request){
        $id=$request->input('id');
        $data=$request->except(["_token"]);

        $inicio=Inicio::where('id', $id)->update($data);

        return redirect('admin/inicio')->with("Done", "Editado com sucesso");
    }

    function deleteInicio(Request $request){
        $id=$request->input('id');
        $data=Inicio::find($id);

        $data->delete();

        return redirect('admin/inicio')->with("Done", "Removido com sucesso");

    }
}
