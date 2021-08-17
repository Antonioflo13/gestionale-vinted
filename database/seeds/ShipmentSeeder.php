<?php

use Illuminate\Database\Seeder;

use App\Shipment;

class ShipmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $shipments = [
            [
                'label_code' =>  'FRA 6-1 001',
            ]
        ];

        foreach ($shipments as $shipment) {
            $newShipment = new Shipment();
            $newShipment->label_code = $shipment['label_code'];
            
            $newShipment->save();
        }
    }
}
