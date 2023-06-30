<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\AdminSeeder; // Aggiungi il namespace completo qui
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // Altri seeders...

        // Seeder per l'amministratore
        $this->call(AdminSeeder::class);
    }
}
