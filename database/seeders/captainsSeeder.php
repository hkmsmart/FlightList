<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class captainsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fullName = Array('Aylin','Bünyemin','Berkay','Ethem','Rıza','Ali Osman','Mustafa','Furkan','Gökhan');
        foreach ($fullName as $name){
            DB::table('captains')->insert([
                'full_name' => $name
            ]);
        }
    }
}
