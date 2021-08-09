<?php

use Illuminate\Database\Seeder;

use App\Revenue;

class RevenueTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $revenues = [
            [
                'sale_price' =>  10,
                'purchase_price' => 12,
                'revenue' => 25,
                'percentage_revenue' => 19,
                'owner_revenue' => 20
            ]
        ];

        foreach ($revenues as $revenue) {
            $newRevenue = new Revenue();
            $newRevenue->sale_price = $revenue['sale_price'];
            $newRevenue->purchase_price = $revenue['purchase_price'];
            $newRevenue->revenue = $revenue['revenue'];
            $newRevenue->percentage_revenue = $revenue['percentage_revenue'];
            $newRevenue->owner_revenue = $revenue['owner_revenue'];
            
            $newRevenue->save();
        }
    }
}
