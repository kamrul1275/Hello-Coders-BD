<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::insert([
            
            
            [ 
              'name' => 'admin',
              'email' => 'admin@gmail.com',
              'password' => Hash::make('password'),
              'role'=>'admin',
             ],
  
             [ 
              'name' => 'user',
              'email' => 'user@gmail.com',
              'password' => Hash::make('password'),
              'role'=>'user',
             ],
  

          ]
      
      );
      }
    }
