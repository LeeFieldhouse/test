<?php

use Illuminate\Database\Seeder;
use App\Bristol;

class BristolsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $places = [
            [
                'name' => 'Bristol',
                'parent_id' => null
            ],
            [
                'name' => 'Nailsea',
                'parent_id' => 1
            ],
            [
                'name' => 'Scotch Horn',
                'parent_id' => 2
            ],
            [
                'name' => 'Gym',
                'parent_id' => 2
            ],

        ];


        foreach($places as $place){
            Bristol::create($place);
        }

    }
}
