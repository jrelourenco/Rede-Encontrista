<?php

use Illuminate\Database\Seeder;

class MeetingSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Meeting::class, 20)->create();
    }
}
