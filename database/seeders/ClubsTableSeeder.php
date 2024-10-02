<?php

namespace Database\Seeders;

use App\Models\Clubs;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClubsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $clubs = [
            [
                'stadiums_id'   => '1',
                'name'          => 'Chelsea FC',
                'logo'          => 'https://resources.premierleague.com/premierleague/badges/t8.svg',
                'url'           => 'www.chelseafc.com',
                'trophy'        => 19,
                'created_at'    => '2024-08-27 00:00:00',
                'updated_at'    => '2024-08-27 00:00:00',
            ],
            [
                'stadiums_id'   => '2',
                'name'          => 'Arsenal',
                'logo'          => 'https://resources.premierleague.com/premierleague/badges/t3.svg',
                'url'           => 'www.arsenal.com',
                'trophy'        => 8,
                'created_at'    => '2024-08-27 00:00:00',
                'updated_at'    => '2024-08-27 00:00:00',
            ],
            [
                'stadiums_id'   => '3',
                'name'          => 'Manchester United',
                'logo'          => 'https://resources.premierleague.com/premierleague/badges/t1.svg',
                'url'           => 'www.manutd.com',
                'trophy'        => 20,
                'created_at'    => '2024-08-27 00:00:00',
                'updated_at'    => '2024-08-27 00:00:00',
            ],
            [
                'stadiums_id'   => '4',
                'name'          => 'Manchester City',
                'logo'          => 'https://resources.premierleague.com/premierleague/badges/t43.svg',
                'url'           => 'www.mancity.com',
                'trophy'        => 12,
                'created_at'    => '2024-08-27 00:00:00',
                'updated_at'    => '2024-08-27 00:00:00',
            ],
            [
                'stadiums_id'   => '5',
                'name'          => 'Liverpool',
                'logo'          => 'https://resources.premierleague.com/premierleague/badges/t14.svg',
                'url'           => 'www.liverpoolfc.com',
                'trophy'        => 11,
                'created_at'    => '2024-08-27 00:00:00',
                'updated_at'    => '2024-08-27 00:00:00',
            ],
            [
                'stadiums_id'   => '6',
                'name'          => 'Tottenham Hotspur',
                'logo'          => 'https://resources.premierleague.com/premierleague/badges/t6.svg',
                'url'           => 'www.tottenhamhotspur.com',
                'trophy'        => 0,
                'created_at'    => '2024-08-27 00:00:00',
                'updated_at'    => '2024-08-27 00:00:00',
            ],
        ];

        Clubs::insert($clubs);
    }
}
