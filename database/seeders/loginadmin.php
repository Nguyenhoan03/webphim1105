<?php

namespace Database\Seeders;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\loginadmins;

class loginadmin extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        loginadmins::create([
            'username' => 'hoanphephe',        
            'password' =>'hoanphe1',
        ]);
    }
}
