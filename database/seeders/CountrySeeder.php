<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Country::insert([            
            [
                'country_name' => 'El Salvador',
                'country_code' => 503,                
                'created_at' => now()
            ],
            [
                'country_name' => 'Afghanistan',
                'country_code' => 93,                
                'created_at' => now()
            ],
            [
                'country_name' => 'Estados Unidos',
                'country_code' => 1,                
                'created_at' => now()
            ],
            [
                'country_name' => 'Rusia',
                'country_code' => 7,                
                'created_at' => now()
            ],
            [
                'country_name' => 'Ucrania',
                'country_code' => 380,                
                'created_at' => now()
            ]
        ]
        );
    }
}
