<?php

use Illuminate\Database\Seeder;

class AdminUserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Encontrista::create([
            'nome' => 'rede_encontrista',
            'email' => 'redencontrista@shalom.pt',
            'alcunha' => 'admin',
            'password' => bcrypt('qwe1234R')
        ]);
    }
}
