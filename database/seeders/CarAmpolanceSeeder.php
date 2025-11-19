<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CarAmpolance;

class CarAmpolanceSeeder extends Seeder
{
    public function run()
    {
        CarAmpolance::create([
            'staff_id' => 1,
            'model' => 'Default Model',
            'status' => 'Available'
        ]);
    }
}
?>
