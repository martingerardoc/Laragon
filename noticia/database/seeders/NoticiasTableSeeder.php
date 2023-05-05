<?php

namespace Database\Seeders;
use App\Models\Noticia;
use App\Models\User;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NoticiasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $n = new Noticia();
        $n->titulo = "Titulo de prueba";
        $n->cuerpo = "Cuerpo de prueba";
        $n->autor = User::all()->random()->id;
        $n->save();
        //
        $n = Noticia::first(); //$n = Noticia::find(1);
        $n->titulo = "Titulo de prueba modificado";
        $n->save();

        $n = Noticia::firstOrNew(['titulo' => "Titulo de prueba modificado"]);
        $n->titulo = "Titulo de prueba modificado nuevamente";
        $n->save();

        $n = Noticia::firstOrNew(['Titulo'=> "Titulo de prueba modificado"]);
        $n->cuerpo="como es nuevo, hay que asignar los valores not null";
        $n->autor = User::all()->random()->id;
        $n->save();

        $n = Noticia::find(2);
        $n->delete();
        $n = Noticia::destroy(1);

        for ($i=1 ; $i <= 20 ; $i++ ){
            $n = new Noticia();
            $n->titulo = "Noticia $i";
            $n->cuerpo = file_get_contents('http://loripsum.net/api');
            $n->autor = User::all()->random()->id;
            $n->save();
        }
    }
}
