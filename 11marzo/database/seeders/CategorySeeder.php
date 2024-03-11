<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $file = fopen(database_path('seeds/categories.csv'), 'r');
        $categories = [];

        while (($line = fgetcsv($file)) !== false){
        
            $categories[] = [
                'name' => $line[0],
                'description' => $line[1],
                'created_at' => now()
            ];
        }

        fclose($file);

        DB::table('categories')->insert($categories);
    }
}
