<?php

namespace Database\Seeders;

use App\Models\Subsidiary;
use Illuminate\Database\Seeder;

class SubsidiarySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Subsidiary::insert(
            [
                [
                    'subsidiary_name' => 'Sucursal 1',
                    'address' => 'CARRETERA A SANTA TECLA KM. 11, LA LIBERTAD, EL SALVADOR',
                    'created_at' => now()
                ],
                [
                    'subsidiary_name' => 'Sucursal 2',
                    'address' => 'CARRETERA A SANTA TECLA KM. 10, LA LIBERTAD, EL SALVADOR',
                    'created_at' => now()
                ],
                [
                    'subsidiary_name' => 'Sucursal 3',
                    'address' => 'CARRETERA A SANTA TECLA KM. 02, LA LIBERTAD, EL SALVADOR',
                    'created_at' => now()
                ],
                [
                    'subsidiary_name' => 'Sucursal 4',
                    'address' => 'CARRETERA A SANTA TECLA KM. 03, LA LIBERTAD, EL SALVADOR',
                    'created_at' => now()
                ],
                [
                    'subsidiary_name' => 'Sucursal 5',
                    'address' => 'CARRETERA A SANTA TECLA KM. 05, LA LIBERTAD, EL SALVADOR',
                    'created_at' => now()
                ]
            ]
        );
        
    }
}
