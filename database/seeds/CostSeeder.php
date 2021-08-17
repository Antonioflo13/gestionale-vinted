<?php

use Illuminate\Database\Seeder;

use App\Cost;

class CostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $costs = [
            [
                'typology' =>  'Materiale per spedizioni',
                'cost_price' => 1,10,
            ]
        ];

        foreach ($costs as $cost) {
            $newCost = new Cost();
            $newCost->typology = $cost['typology'];
            $newCost->cost_price = $cost['cost_price'];
            
            $newCost->save();
        }
    }
}
