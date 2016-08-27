<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleTypeSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        $roles = [
            "Encontrista",
            "Coordenador",
            "Secretario",
            "Tesoureiro"
        ];
        foreach ($roles as $role)
            DB::table('role_types')->insert([
                'name' => $role
            ]);
    }
}
