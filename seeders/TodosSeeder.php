<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

use Illuminate\Database\Seeder;

class TodosSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $useradmin=User::create([
            'name' => 'admin paul',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin'),
            'tipo' => '1',
            ]);
            
        $user1=User::create([
            'name' => 'usuario Marcos',
            'email' => 'marcos@gmail.com',
            'password' => Hash::make('marcos'),
            'tipo' => '0',
            ]);

    }
}
