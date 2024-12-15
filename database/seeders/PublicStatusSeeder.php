<?php

namespace Database\Seeders;

use App\Models\PublicStatus;
use Illuminate\Database\Seeder;

class PublicStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['name' => 'Abierto', 'name_en' => 'Open', 'icon' => 'fas fa-lock-open', 'color' => 'style="color: rgb(0, 207, 0)"'],
            ['name' => 'Cerrado', 'name_en' => 'Close', 'icon' => 'fas fa-lock', 'color' => 'style="color: red"'],
            ['name' => 'Suspendido', 'name_en' => 'Pause', 'icon' => 'fas fa-pause', 'color' => 'style="color: rgb(218, 214, 7)"'],
        ];
        PublicStatus::insert($data);
    }
}
