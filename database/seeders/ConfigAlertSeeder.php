<?php

namespace Database\Seeders;

use App\Models\ConfigAlert;
use Illuminate\Database\Seeder;

class ConfigAlertSeeder extends Seeder
{
    public function run(): void
    {
        ConfigAlert::factory(1000)->create();
    }
}