<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $articles = [
            ['name' => 'Tecnología', 'created_at' => now(), 'updated_at' => now() ],
            ['name' => 'Reparación', 'created_at' => now(), 'updated_at' => now() ],
            ['name' => 'Desarrollo', 'created_at' => now(), 'updated_at' => now() ],
            
        ];
        DB::table('articles')->insert($articles);
    }
}
