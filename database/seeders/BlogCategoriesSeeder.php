<?php

namespace Database\Seeders;

use App\Models\BlogCategories;
use Illuminate\Database\Seeder;

class BlogCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name' => 'Categoría 1',
                'name_en' => 'Category 1',
                'description' => 'Esto es una prueba 1',
                'description_en' => 'This is a test 1',
            ],
        ];
        BlogCategories::insert($data);
    }
}
