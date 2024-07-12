<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Siswadata;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Siswadata::factory()->count(20)->create();
    }
}
