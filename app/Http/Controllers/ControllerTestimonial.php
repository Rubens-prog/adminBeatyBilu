<?php

namespace App\Http\Controllers;
use App\Models\Testimonial;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;


class ControllerTestimonial extends Controller
{
    function salvaTestimonial(Request $request){
        $data=$request->except(['_token']);
        $testimonial=Testimonial::create($data);

        return redirect('/admin/depoimentos')->with("Done", "Salvo com sucesso");
    }

    function editaTestimonial(Request $request){
        $id=$request->input('id');
        $testimonials=Testimonial::find($id);

        return view('depoimentos.edit')->with('testimonial', $testimonials);
    }

    function updateTestimonial(Request $request){
        $id=$request->input('id');
        $data=$request->except(["_token"]);

        $testimonial=Testimonial::find($id);
        
        $testimonial->where('id',$id)->update($data);

        return redirect('admin/depoimentos')->with("Done", "Editado com sucesso");
    }

    function deleteTestimonial(Request $request){
        $id=$request->input('id');
        $testimonial=Testimonial::find($id);

        $testimonial->delete();

        return redirect('admin/depoimentos')->with("Done", "Removido com sucesso");
    }
}
