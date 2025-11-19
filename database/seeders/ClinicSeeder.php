<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\App;

class ClinicSeeder extends Seeder
{
    public function run()
    {
        \App\Models\Clinck::create([
            'name' => 'Default Clinic',
            'local_id' => 1,
            'phone' => '0000',
            'status' => 1
        ]);
    }
}
?>
