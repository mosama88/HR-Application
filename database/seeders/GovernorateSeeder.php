<?php

namespace Database\Seeders;

use App\Models\Governorate;
use App\Faker\GovernorateFaker;
use Illuminate\Database\Seeder;
use Faker\Factory as FakerFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class GovernorateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = FakerFactory::create();
        $governorateFaker = new GovernorateFaker($faker); // ✅ تمرير Faker

        for ($i = 0; $i < 27; $i++) {
            $governorate = $governorateFaker->uniqueGovernorate();

            Governorate::updateOrCreate(
                ['name' => $governorate],
                [
                    'country_id' => 5,
                    'active' => 1,
                    'com_code' => 6000,
                    'created_by' => 1,
                ]
            );
        }
    }
}