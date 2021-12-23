<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CampBenefits;

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
                'name' => 'Pro Techstack Kit'
            ],
            [
                'camp_id' => 1,
                'name' => 'iMac Pro 2021 & Display'
            ],
            [
                'camp_id' => 1,
                'name' => '1-1 Mentoring Program'
            ],
            [
                'camp_id' => 1,
                'name' => 'Final Project Serificate'
            ],
            [
                'camp_id' => 1,
                'name' => 'Future Job Opportinity'
            ],
            [
                'camp_id' => 1,
                'name' => 'Premium Design Kit'
            ],
            [
                'camp_id' => 1,
                'name' => 'Website Builder'
            ],
            [
                'camp_id' => 2,
                'name' => '1-1 Mentoring Program'
            ],
            [
                'camp_id' => 2,
                'name' => 'Final Project Sertificate'
            ],
            [
                'camp_id' => 2,
                'name' => 'Offline Course Videos'
            ],
        ];

        // CampBenefits::insert($campBenefits);

        foreach ($campBenefits as $key => $campBenefit){
            CampBenefits::create($campBenefit);
        }

    }
}
