<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CampBenefit;

class CampBenefitTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $campBenefits = [
            [
                'camp_id' => 1,
                'name' => 'Pro TechStack kit',
                
            ],
            [
                'camp_id' => 1,
                'name' => 'iMac pro 2022',

            ],
            [
                'camp_id' => 1,
                'name' => '1-1 mentoring program',

            ],
            [
                'camp_id' => 1,
                'name' => 'Final Project certificate',

            ],
            [
                'camp_id' => 1,
                'name' => 'Offlien COurse Video',

            ],
            [
                'camp_id' => 1,
                'name' => 'Premium Design kit',

            ],
            [
                'camp_id' => 1,
                'name' => 'Website Builder',

            ],
            [
                'camp_id' => 2,
                'name' => '1-1 Mentoring Program',

            ],
            [
                'camp_id' => 2,
                'name' => 'Final project Certificate',

            ],
            [
                'camp_id' => 2,
                'name' => 'Offline Course Video',

            ],
           
            ];

            CampBenefit::insert($campBenefits);
    }
}
