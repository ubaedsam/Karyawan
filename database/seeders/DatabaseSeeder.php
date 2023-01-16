<?php

namespace Database\Seeders;

use App\Models\User; 
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Jabatan::factory(10)->create();
        \App\Models\Kontrak::factory(10)->create();
        \App\Models\Pegawai::factory(10)->create();
    }
}
