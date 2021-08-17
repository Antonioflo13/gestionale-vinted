<?php

use Illuminate\Database\Seeder;

use App\Partner;

class PartnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $partners = [
            [
                'name' =>  'Antonio',
                'surname' => 'Flore',
            ]
        ];

        foreach ($partners as $partner) {
            $newPartner = new Partner();
            $newPartner->name = $partner['name'];
            $newPartner->surname = $partner['surname'];
            
            $newPartner->save();
        }
    }
}
