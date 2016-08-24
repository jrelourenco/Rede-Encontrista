<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AdminUserSeed::class);
        $this->call(GroupSeed::class);
        $this->call(MeetingTypeSeed::class);
    }
}
