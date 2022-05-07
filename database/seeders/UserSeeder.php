<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')
            ->insert(
                [
                    'name' => env('ADMIN_USER_NAME'),
                    'email' => env('ADMIN_USER_EMAIL'),
                    'password' => Hash::make(env('ADMIN_USER_PASSWORD')),
                    'locale' =>'ru',
                    'created_at' => NOW(),
                    'updated_at' => NOW(),
                    'permissions' => json_encode(
                        [
                            'platform.index' => true,
                            'platform.systems.roles' => true,
                            'platform.systems.users' => true,
                            'platform.systems.attachment' => true,
                            'platform.systems.language' => true,
                        ]
                    )
                ]
            );
    }
}
