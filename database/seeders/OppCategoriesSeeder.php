<?php

namespace Database\Seeders;

use App\Models\OpportunityCategories;
use Illuminate\Database\Seeder;

class OppCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['name' => 'Categoría 1', 'name_en' => 'Category 1', 'slug' => 'categoria-1', 'slug_en' => 'category-1'],
            ['name' => 'Categoría 2', 'name_en' => 'Category 2', 'slug' => 'categoria-2', 'slug_en' => 'category-2'],
            ['name' => 'Categoría 3', 'name_en' => 'Category 3', 'slug' => 'categoria-3', 'slug_en' => 'category-3'],
        ];
        OpportunityCategories::insert($data);
    }
}
