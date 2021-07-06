<?php

namespace App\Http\Controllers;
use App\Models\Servico;


use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ControllerServico extends Controller
{
    function salvaServico(Request $request){
        $data=$request->except(["_token"]);
        $servicos=Servico::create($data);

        return redirect('/admin/servicos')->with("Done", "Salvo com sucesso");
    }

    function editaServico(Request $request){
        $data=$request->input('id');
        $servicos=Servico::find($data);

        return view('servicos.edit')->with("servico",$servicos);
    }

    function updateServico(Request $request){
        $id=$request->input('id');
        $data=$request->except(["_token"]);

        $servico=Servico::where('id', $id)->update($data);

        return redirect('/admin/servicos')->with("Done", "Editado com sucesso");
    }

    function deleteServico(Request $request){
        $id=$request->input('id');
        $data=Servico::find($id);

        $data->delete();

        return redirect('/admin/servicos')->with("Done", "Removido com sucesso");
    }
}
