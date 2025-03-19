<?php

namespace Database\Seeders;

use App\Models\Company;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $companies = [
            [
                'name' => 'ABC Logistics',
                'short_name' => 'ABC',
                'email' => 'contact@abc.com',
                'phone' => '1234567890',
                'balance' => 50000.00,
            ],
            [
                'name' => 'XYZ Transport',
                'short_name' => 'XYZ',
                'email' => 'info@xyz.com',
                'phone' => '0987654321',
                'balance' => 75000.00,
            ],
            [
                'name' => 'Fast Movers',
                'short_name' => 'FAST',
                'email' => 'support@fastmovers.com',
                'phone' => '1122334455',
                'balance' => 30000.00,
            ],
        ];

        foreach ($companies as $company) {
            Company::create($company);
        }
    }
}