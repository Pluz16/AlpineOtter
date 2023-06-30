<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AdminSeeder extends Seeder
{
    public function run()
    {
        // Crea l'account dell'amministratore
        User::create([
            'name' => 'Admin',
            'email' => 'manuelpu@libero.it',
            'password' => Hash::make('AdminOtter'),
        ]);
    }
}
