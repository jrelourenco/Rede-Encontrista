<?php

use App\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EncontristaSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


            factory(App\Encontrista::class, 50)->create()->each(function ($u) {
                $u->roles()->create([
                    'role_id' => Role::role('Encontrista'),
                    'group_id' => DB::table('groups')->orderBy(DB::raw('RAND()'))->get()[0]->id
                ]);
            });
    }
}
