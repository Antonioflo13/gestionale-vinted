<?php

use Illuminate\Database\Seeder;

use App\Owner;

class OwnerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $owners = [
            [
                'owner_name' =>  'Antonio',
                'owner_surname' => 'Flore',
                'owner_percentage' => 25
            ]
        ];

        foreach ($owners as $owner) {
            $newOwner = new owner();
            $newOwner->owner_name = $owner['owner_name'];
            $newOwner->owner_surname = $owner['owner_surname'];
            $newOwner->owner_percentage = $owner['owner_percentage'];
            
            $newOwner->save();
        }
    }
}
