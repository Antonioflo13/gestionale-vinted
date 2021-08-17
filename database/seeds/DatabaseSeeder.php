<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ProductTableSeeder::class);
        $this->call(OwnerTableSeeder::class);
        $this->call(RevenueTableSeeder::class);
        $this->call(PartnerSeeder::class);
        $this->call(CostSeeder::class);
    }
}
