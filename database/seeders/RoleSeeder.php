<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')
            ->insert(
                [
                    'name' => env('ADMIN_ROLE_NAME'),
                    'slug' => env('ADMIN_ROLE_SLUG'),
                    'created_at' => NOW(),
                    'updated_at' => NOW(),
                    'permissions' => json_encode(
                        [
                            'platform.index' => true,
                            'platform.systems.roles' => true,
                            'platform.systems.users' => true,
                            'platform.systems.attachment' => true,
                            'platform.systems.language' => true
                        ]
                    )
                ]
            );

        DB::table('role_users')
            ->insert(
                [
                    'user_id' => 1,
                    'role_id' =>1,
                ]
            );
    }
}
