<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Database\Factories\NoticiaFactory;

class NoticiaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $noticias = NoticiaFactory::generarNoticias(30);
        return view ('backend.noticias.index', compact('noticias'));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $noticia = (object)array(
            "titulo"=>"what is Lorem Ipsum?",
            "cuerpo"=>"Lorem ipsum is simply dummy text",
            "imagen"=>"https://servicepath.co/wp-content/uploads/2019/11/news-1200x565.jpg",
            "id"=>$id,
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
