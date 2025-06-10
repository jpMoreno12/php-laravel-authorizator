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
            'name' => 'games.index',
        ]);

        DB::table('permissions')->insert([
            'name' => 'games.store',
        ]);

        DB::table('permissions')->insert([
            'name' => 'games.show',
        ]);

        DB::table('permissions')->insert([
            'name' => 'games.update',
        ]);

        DB::table('permissions')->insert([
            'name' => 'games.destroy',
        ]);
    }
}
