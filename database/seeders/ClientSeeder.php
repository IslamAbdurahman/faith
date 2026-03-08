<?php

namespace Database\Seeders;

use App\Models\Client;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

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
                'name' => 'local',
                'phone' => '127.0.0.1',
                'url' => '127.0.0.1',
                'date' => '2030-01-01',
                'limit' => '50',
            ],
            [
                'name' => 'demo.faith.uz',
                'phone' => 'demo.faith.uz',
                'url' => 'demo.faith.uz',
                'date' => '2030-01-01',
                'limit' => '50',
            ]
        ];

        foreach ($clients as $client) {
            Client::create($client);
        }
    }
}
