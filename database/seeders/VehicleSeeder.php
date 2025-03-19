<?php

namespace Database\Seeders;

use App\Models\Vehicle;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VehicleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $vehicles = [
            [
                'name' => 'Toyota Hilux',
                'number' => 'ABC-1234',
                'type' => 'truck',
                'capacity' => 2000, // in kg
                'status' => 'active',
            ],
            [
                'name' => 'Suzuki Carry',
                'number' => 'XYZ-5678',
                'type' => 'van',
                'capacity' => 800, // in kg
                'status' => 'active',
            ],
            [
                'name' => 'Honda City',
                'number' => 'DEF-9012',
                'type' => 'car',
                'capacity' => 500, // in kg
                'status' => 'inactive',
            ],
            [
                'name' => 'Mitsubishi Canter',
                'number' => 'GHI-3456',
                'type' => 'truck',
                'capacity' => 5000, // in kg
                'status' => 'under_maintenance',
            ],
        ];

        foreach ($vehicles as $vehicle) {
            Vehicle::create($vehicle);
        }
    }
}
