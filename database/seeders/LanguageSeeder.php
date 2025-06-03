<?php

namespace Database\Seeders;

use App\Models\Language;
use App\Faker\LanguageFacker;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Faker\Factory as FakerFactory;

class LanguageSeeder extends Seeder
{
    public function run(): void
    {
        $faker = FakerFactory::create();
        $languageFaker = new LanguageFacker($faker); // ✅ تمرير Faker

        for ($i = 0; $i < 50; $i++) {
            $language = $languageFaker->uniqueLanguageName();

            Language::updateOrCreate(
                ['name' => $language],
                [
                    'active' => 1,
                    'com_code' => 6000,
                    'created_by' => 1,
                ]
            );
        }
    }
}