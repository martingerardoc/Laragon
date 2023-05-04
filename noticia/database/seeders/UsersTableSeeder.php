<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use DB;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->count(5)->create();
        /*DB::table('users')->insert([
            'name'=> 'Martin',
            'email'=> 'Martingerardoc56@gmail.com',
            'password'=>'secret',
        ]);
        for($i=0 ; $i<10 ; $i++){
            DB::table('users')->insert([
                'name'=> str::random(10),
                'email' => str::random(10) . '@isft38.edu.ar',
                'password'=>bcrypt('secret'),
            ]);
        }
        // */
        
    }
}
