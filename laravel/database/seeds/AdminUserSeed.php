<?php

use Illuminate\Database\Seeder;
use \App\Encontrista;

class AdminUserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Encontrista::create([
            'name' => 'rede_encontrista',
            'email' => 'redencontrista@shalom.pt',
            'nickname' => 'admin',
            'password' => bcrypt('qwe1234R')
        ]);
    }
}
