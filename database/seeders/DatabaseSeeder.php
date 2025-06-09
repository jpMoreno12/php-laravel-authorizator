<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('permissions')->insert([
            'name' => 'createGame',
        ]);

        DB::table('permissions')->insert([
            'name' => 'readGame',
        ]);

        DB::table('permissions')->insert([
            'name' => 'updateGame',
        ]);

        DB::table('permissions')->insert([
            'name' => 'deleteGame',
        ]);
    }
}
