<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $allowLanguages = config('app.available_locales');
        $insertData = [];

        foreach ($allowLanguages as $languageCode => $language) {
            $insertData[] = [
                'code' => $languageCode,
                'name' => $language,
                'status' => true,
                'created_at' => NOW(),
                'updated_at' => NOW()
            ];
        }

        DB::table('language')
            ->insert(
                $insertData
            );
    }
}
