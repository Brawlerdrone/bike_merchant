<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        DB::table('admins')->insert([
            'id'=>1,
            'name'=>'admin',
            'type' =>'admin',
            'mobile' =>'0702775525',
            'email' => 'admin@admin.com',
            'password' => Hash::make('password'),
            'image' =>'',
            'status' =>1,
        ]);
        DB::table('admins')->insert([
            
            'name'=>'Dante',
            'type' =>'admin',
            'mobile' =>'000980000',
            'email' => 'Dante@damin.com',
            'password' => Hash::make('El-Camino'),
            'image' =>'',
            'status' =>1,
        ]);

    }
}
