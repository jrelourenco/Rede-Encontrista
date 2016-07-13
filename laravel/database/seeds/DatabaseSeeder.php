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
        $this->call(GruposSeed::class);
        $this->call(TipoEncontroSeed::class);
    }
}
