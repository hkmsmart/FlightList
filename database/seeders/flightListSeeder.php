<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class flightListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $flightArr = Array(
            Array(
                'code'          => 'PGS',
                'schedule_date' => date('Y-m-d H:i:s',strtotime('2021-07-10 10:30')),
                'origin'        => 'IST',
                'destination'   => 'AMS',
                'captain_id'    => 1,
                'status'        => true
            ),
            Array(
                'code'          => 'FHY',
                'schedule_date' => date('Y-m-d H:i:s',strtotime('2021-12-20 10:30')),
                'origin'        => 'IST',
                'destination'   => 'PAR',
                'captain_id'    => 2,
                'status'        => false
            ),
            Array(
                'code'          => 'FHY',
                'schedule_date' => date('Y-m-d H:i:s',strtotime('2022-11-25 10:30')),
                'origin'        => 'IST',
                'destination'   => 'IZM',
                'captain_id'    => 3,
                'status'        => false
            ),
            Array(
                'code'          => 'FHY',
                'schedule_date' => date('Y-m-d H:i:s',strtotime('2022-06-10 10:30')),
                'origin'        => 'BER',
                'destination'   => 'IST',
                'captain_id'    => 4,
                'status'        => false
            ),
            Array(
                'code'          => 'FHY',
                'schedule_date' => date('Y-m-d H:i:s',strtotime('2022-06-09 10:30')),
                'origin'        => 'IST',
                'destination'   => 'BER',
                'captain_id'    => 5,
                'status'        => false
            ),
            Array(
                'code'          => 'FHY',
                'schedule_date' => date('Y-m-d H:i:s',strtotime('2022-04-10 09:45')),
                'origin'        => 'IZM',
                'destination'   => 'IST',
                'captain_id'    => 6,
                'status'        => true
            ),
            Array(
                'code'          => 'FHY',
                'schedule_date' => date('Y-m-d H:i:s',strtotime('2022-07-08 09:45')),
                'origin'        => 'IST',
                'destination'   => 'PAR',
                'captain_id'    => 7,
                'status'        => false
            ),
            Array(
                'code'          => 'FHY',
                'schedule_date' => date('Y-m-d H:i:s',strtotime('2022-07-08 08:30')),
                'origin'        => 'TOK',
                'destination'   => 'HAM',
                'captain_id'    => 8,
                'status'        => false
            ),
            Array(
                'code'          => 'PGS',
                'schedule_date' => date('Y-m-d H:i:s',strtotime('2021-12-20 08:30')),
                'origin'        => 'AMS',
                'destination'   => 'IST',
                'captain_id'    => 9,
                'status'        => true
            ),
        );
        foreach ($flightArr as $flight){
            DB::table('flight_list')->insert([
                $flight
            ]);
        }
    }
}
