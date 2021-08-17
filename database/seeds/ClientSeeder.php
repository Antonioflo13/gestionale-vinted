<?php

use Illuminate\Database\Seeder;

use App\Client;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $clients = [
            [
                'username' =>  'MatArtIns',
            ]
        ];

        foreach ($clients as $client) {
            $newClient = new Client();
            $newClient->username = $client['username'];
            
            $newClient->save();
        }
    }
}
