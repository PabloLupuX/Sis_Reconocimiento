<?php

namespace Database\Seeders;

use App\Models\ConfigAlert;
use Illuminate\Database\Seeder;

class ConfigAlertSeeder extends Seeder
{
    public function run(): void
    {
        ConfigAlert::factory(10000)->create();
    }
}