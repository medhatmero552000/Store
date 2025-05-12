<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\SettingsSeeder;
use SettingsSeeder as GlobalSettingsSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       $this->call([
            UserSeeder::class,
            AdminSeeder::class,
            SettingsSeeder::class,
        
    
      
       ]);
    }
}
