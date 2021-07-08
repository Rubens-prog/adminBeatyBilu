<?php

namespace App\Http\Controllers;
use App\Models\Contato;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ControllerContato extends Controller
{
    function salvaContato(Request $request){
        $data=$request->except(["_token"]);
        $contato=Contato::create($data);

        return redirect('/admin/contato')->with("Done", "Salvo com sucesso");
    }

    function editaContato(Request $request){
        $id=$request->input('id');
        $contato=Contato::find($id);

        return view('contact.edit')->with('contato', $contato);
    }
   

    function updateContato(Request $request){
        $id=$request->input('id');
        $data=$request->except(["_token"]);


        $contato=Contato::where('id', $id)->update($data);

        return redirect('/admin/contato')->with("Done", "Editado com sucesso");
    }

    function deleteContato(Request $request){
        $id=$request->input('id');
        $contato=Contato::find($id);

        $contato->delete();

        return redirect('/admin/contato')->with("Done", "Removido com sucesso");
    }
}
