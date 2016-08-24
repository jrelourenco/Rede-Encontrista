<?php

use Illuminate\Database\Seeder;
use App\Group;

class GroupSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Group::create(["designation" => "Buraca02", "localization" => "Buraca", "creation_date" => "37262"]);
        Group::create(["designation" => "Buraca04", "localization" => "Buraca", "creation_date" => "38333"]);
        Group::create(["designation" => "Buraca08", "localization" => "Buraca", "creation_date" => "39425"]);
        Group::create(["designation" => "Buraca12", "localization" => "Buraca", "creation_date" => "40965"]);
        Group::create(["designation" => "Cacem10", "localization" => "Cacem", "creation_date" => "40195"]);
        Group::create(["designation" => "Caparide07", "localization" => "Tires", "creation_date" => "39131"]);
        Group::create(["designation" => "Entroncamento13", "localization" => "Entroncamento", "creation_date" => "41294"]);
        Group::create(["designation" => "Laranjeiras09", "localization" => "Laranjeiras", "creation_date" => "39873"]);
        Group::create(["designation" => "Lavradio07", "localization" => "Lavradio", "creation_date" => "41315"]);
        Group::create(["designation" => "Loures10", "localization" => "Loures", "creation_date" => "40216"]);
        Group::create(["designation" => "Madrona05 e Tires05", "localization" => "Madorna", "creation_date" => "38389"]);
        Group::create(["designation" => "MtA10", "localization" => "MtA", "creation_date" => "40216"]);
        Group::create(["designation" => "RM07", "localization" => "RM", "creation_date" => "39425"]);
        Group::create(["designation" => "SDR03", "localization" => "SDR", "creation_date" => "37633"]);
        Group::create(["designation" => "SDR10", "localization" => "SDR", "creation_date" => "40153"]);
        Group::create(["designation" => "SJB08", "localization" => "SJB", "creation_date" => "39509"]);
        Group::create(["designation" => "SJB12", "localization" => "SJB", "creation_date" => "40965"]);
        Group::create(["designation" => "Tires05", "localization" => "Tires", "creation_date" => "38382"]);
        Group::create(["designation" => "VN08", "localization" => "VN", "creation_date" => "39138"]);
        Group::create(["designation" => "VN11", "localization" => "VN", "creation_date" => "40587"]);
        Group::create(["designation" => "Cacem08", "localization" => "Cacem", "creation_date" => "25569"]);
        Group::create(["designation" => "CAboboda14", "localization" => "Conceição da Aboboda", "creation_date" => "41672"]);
        Group::create(["designation" => "SJB14", "localization" => "SJB", "creation_date" => "41665"]);
        Group::create(["designation" => "VN14", "localization" => "VN", "creation_date" => "41679"]);
    }
}
