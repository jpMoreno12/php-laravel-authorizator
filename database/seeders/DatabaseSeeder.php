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
            'name' => 'index',
        ]);

        DB::table('permissions')->insert([
            'name' => 'store',
        ]);

        DB::table('permissions')->insert([
            'name' => 'show',
        ]);

        DB::table('permissions')->insert([
            'name' => 'update',
        ]);

        DB::table('permissions')->insert([
            'name' => 'destroy',
        ]);
    }
}
