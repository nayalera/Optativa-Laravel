<?php

namespace Database\Seeders;

use App\Models\Opportunity;
use Illuminate\Database\Seeder;

class OpportunitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [];
        for($i=1; $i<=30; $i++){
            array_push($data, [
                'title' => 'Título '.$i,
                'title_en' => 'Title '.$i,
                'opportunityCategory_id' => 1,
                'slug' => 'titulo-'.$i,
                'slug_en' => 'title-'.$i,
                'company' => 'LANGEL',
                'company_en' => 'LANGEL',
                'logo' => 'uploads/vklhnwEAnXgEbBbaIYt8pq0ulsr5I7NJENCITWVp.jpg',
                'location' => 'Uruguay',
                'location_en' => 'Uruguay',
                'description' => 'Descripción '.$i,
                'description_en' => 'Description '.$i,
                'requirements' => 'Requerimiento '.$i,
                'requirements_en' => 'Requirements '.$i,
                'offered' => 'Ofertado '.$i,
                'offered_en' => 'Offered '.$i,
                'confidential' => 0,
                'publicStatus_id' => 1,
            ],);
        }
        Opportunity::insert($data);
    }
}
