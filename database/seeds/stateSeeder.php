<?php

use Illuminate\Database\Seeder;

class stateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $negeris = [
            
            ['SGR', 'Selangor'],
            ['KUL', 'Kuala Lumpur'],
            ['MLK', 'Malacca'],
            ['JHR', 'Johor'],
            ['NSM', 'Negeri Sembilan'],
        ];

        foreach ($negeris as $negeri) {
            DB::table('states')->insert([
                'code' => $negeri[0],
                'name' => $negeri[1],
                'status' => '1',
            ]);
        }
    }
}
