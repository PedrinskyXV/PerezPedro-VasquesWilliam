<?php

namespace Database\Seeders;

use App\Models\Area;
use Illuminate\Database\Seeder;

class AreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Area::insert(
            [
                [
                    'area_name' => 'Area 1',
                    'phone' => '2311 1231',
                    'subsidiary_id' => 1,
                    'created_at' => now()
                ],
                [
                    'area_name' => 'Area 2',
                    'phone' => '2525 2525',
                    'subsidiary_id' => 2,
                    'created_at' => now()
                ],
                [
                    'area_name' => 'Area 3',
                    'phone' => '2354 1666',
                    'subsidiary_id' => 3,
                    'created_at' => now()
                ],
                [
                    'area_name' => 'Area 4',
                    'phone' => '2321 5531',
                    'subsidiary_id' => 4,
                    'created_at' => now()
                ],
                [
                    'area_name' => 'Area 51',
                    'phone' => '2151 0000',
                    'subsidiary_id' => 5,
                    'created_at' => now()
                ]
            ]
        );
    }
}
