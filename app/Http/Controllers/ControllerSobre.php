<?php

namespace App\Http\Controllers;
use App\Models\Sobre;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;


class ControllerSobre extends Controller
{
     function salvaSobre(Request $request){
        $data=$request->except(["_token"]);
        $dados=Sobre::create($data);

        return redirect("/admin/sobre")->with("Done", "Salvo com sucesso");
    }


   function editSobre(Request $request){
       $id = $request->input('id');

       $sobre = Sobre::find($id);

       return view('about.edit')->with("sobre", $sobre);
   }


   function updateSobre(Request $request){ 
        $id = $request->input('id');
        $data=$request->except(["_token"]);

        $dados=Sobre::where('id', $id)->update($data);


        return redirect("admin/sobre")->with("Done", "Editado com sucesso");
    
   }

   function deleteSobre(Request $request){
       $data=$request->input('id');
       $dado=Sobre::find($data);

       $dado->delete();

       return redirect("admin/sobre")->with("Done", "Removido com sucesso");
   }
}
