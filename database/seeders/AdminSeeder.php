<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    public function run(): void
    {
        try {
            $admins = [
                [
                    'name' => 'admin',
                    'email' => 'admin@admin.com',
                    'password' => bcrypt('11111111'),
                ],
                [
                    'name' => 'admin2',
                    'email' => 'admin2@admin.com',
                    'password' => bcrypt('11111111'),
                ],
                [
                    'name' => 'admin3',
                    'email' => 'admin3@admin.com',
                    'password' => bcrypt('11111111'),
                ],
            ];

            foreach ($admins as $admin) {
                Admin::updateOrCreate(
                    ['email' => $admin['email']],
                    $admin
                );
            }

        } catch (\Exception $e) {
            dd($e);
        }
    }
}
