<?php

use Illuminate\Database\Seeder;
use App\Grupo;

class GruposSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Grupo::create(["designacao" => "Buraca02", "localizacao" => "Buraca", "data_criacao" => "37262"]);
        Grupo::create(["designacao" => "Buraca04", "localizacao" => "Buraca", "data_criacao" => "38333"]);
        Grupo::create(["designacao" => "Buraca08", "localizacao" => "Buraca", "data_criacao" => "39425"]);
        Grupo::create(["designacao" => "Buraca12", "localizacao" => "Buraca", "data_criacao" => "40965"]);
        Grupo::create(["designacao" => "Cacem10", "localizacao" => "Cacem", "data_criacao" => "40195"]);
        Grupo::create(["designacao" => "Caparide07", "localizacao" => "Tires", "data_criacao" => "39131"]);
        Grupo::create(["designacao" => "Entroncamento13", "localizacao" => "Entroncamento", "data_criacao" => "41294"]);
        Grupo::create(["designacao" => "Laranjeiras09", "localizacao" => "Laranjeiras", "data_criacao" => "39873"]);
        Grupo::create(["designacao" => "Lavradio07", "localizacao" => "Lavradio", "data_criacao" => "41315"]);
        Grupo::create(["designacao" => "Loures10", "localizacao" => "Loures", "data_criacao" => "40216"]);
        Grupo::create(["designacao" => "Madrona05 e Tires05", "localizacao" => "Madorna", "data_criacao" => "38389"]);
        Grupo::create(["designacao" => "MtA10", "localizacao" => "MtA", "data_criacao" => "40216"]);
        Grupo::create(["designacao" => "RM07", "localizacao" => "RM", "data_criacao" => "39425"]);
        Grupo::create(["designacao" => "SDR03", "localizacao" => "SDR", "data_criacao" => "37633"]);
        Grupo::create(["designacao" => "SDR10", "localizacao" => "SDR", "data_criacao" => "40153"]);
        Grupo::create(["designacao" => "SJB08", "localizacao" => "SJB", "data_criacao" => "39509"]);
        Grupo::create(["designacao" => "SJB12", "localizacao" => "SJB", "data_criacao" => "40965"]);
        Grupo::create(["designacao" => "Tires05", "localizacao" => "Tires", "data_criacao" => "38382"]);
        Grupo::create(["designacao" => "VN08", "localizacao" => "VN", "data_criacao" => "39138"]);
        Grupo::create(["designacao" => "VN11", "localizacao" => "VN", "data_criacao" => "40587"]);
        Grupo::create(["designacao" => "Cacem08", "localizacao" => "Cacem", "data_criacao" => "25569"]);
        Grupo::create(["designacao" => "CAboboda14", "localizacao" => "Conceição da Aboboda", "data_criacao" => "41672"]);
        Grupo::create(["designacao" => "SJB14", "localizacao" => "SJB", "data_criacao" => "41665"]);
        Grupo::create(["designacao" => "VN14", "localizacao" => "VN", "data_criacao" => "41679"]);
    }
}
