<?php

use Illuminate\Database\Seeder;
use App\TipoEncontro;

class TipoEncontroSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TipoEncontro::create(["nome_encontro" => "Encontro de Espiritualidade", "tipo_encontros" => "Encontro", "descricao" => "<p>Espiritualidade é essencialmente uma forma de ser e de estar, capaz de transparecer o Espírito que me habita, e que se manifesta na minha relação comigo próprio, na relação com os outros, com a natureza e com Deus. Uma relação que reflecte a ..."]);
        TipoEncontro::create(["nome_encontro" => "Curso de Relações Humanas", "tipo_encontros" => "Curso", "descricao" => "<p>Este curso, que surge quase no culminar da fase do Pré-Encontro, procura melhorar os relacionamentos dentro do grupo, através do melhor conhecimento de nós mesmos. Procura também transformar atitudes e valores nas relações humanas para níveis d..."]);
        TipoEncontro::create(["nome_encontro" => "Encontro de Oração", "tipo_encontros" => "Encontro", "descricao" => "<p>Sem oração a vida do cristão é estéril e vazia, a acção torna-se seca e rotineira… Muitas vezes a escassez de tempo, a pouca disponibilidade ou simplesmente a falta de meios são obstáculo à comunhão com Deus. Fazer uma experiência rica, ..."]);
        TipoEncontro::create(["nome_encontro" => "Encontro Inicial", "tipo_encontros" => "Encontro Inicial", "descricao" => "<p><span>O Encontro Inicial pretende proporcionar aos jovens uma vivência e testemunho do Cristianismo autenticamente envagélico. Constará de exposições- reflexões dialogantes que tenham o seu príncipio na Palavra de Deus, a sua “alma” na litu..."]);
        TipoEncontro::create(["nome_encontro" => "Curso Educação Libertadora", "tipo_encontros" => "Curso", "descricao" => "<p>“Ninguém educa ninguém! Educamo-nos em grupo!” Este é um dos princípios fundamentais da Educação Libertadora desenvolvida por Paulo Freire e adoptada pelo Movimento como base da sua acção evangelizadora.</p><div>Este curso pretende colocar..."]);
        TipoEncontro::create(["nome_encontro" => "Reencontro Viver em Igreja", "tipo_encontros" => "Reencontro", "descricao" => ""]);
        TipoEncontro::create(["nome_encontro" => "Curso de Pedagogia Dinâmica", "tipo_encontros" => "Curso", "descricao" => "<p>A forma de trabalhar do MEJShalom baseia-se na Pedagogia da Educação Libertadora.</p><div>A partir da experiência de diversas técnicas para dinâmicas de trabalho em grupo procura-se o objectivo das mesmas, a sua função pedagógica e subsidiári..."]);
        TipoEncontro::create(["nome_encontro" => "Encontro de Vocação", "tipo_encontros" => "Encontro", "descricao" => "<p>Este é um encontro que antes de tudo procura levar-nos ao encontro com nós mesmos e com Deus, numa tentativa de compreender o que o nosso Pai quer de nós.</p><div>Leva-nos ao encontro das várias vocações de modo a podermos tomar uma opção cons..."]);
        TipoEncontro::create(["nome_encontro" => "Reencontro com Cristo Nosso Irmão", "tipo_encontros" => "Reencontro", "descricao" => "<p>Chama-se reencontro precisamente por retomar uma das grandes temáticas exploradas no Encontro Inicial de modo a reavivar o que antes foi transmitido, mas também com uma intenção de aprofundamento.</p><div>Este reencontro pretende contextualizar a ..."]);
        TipoEncontro::create(["nome_encontro" => "Reencontro Visão Cristã do Mundo", "tipo_encontros" => "Reencontro", "descricao" => "<p>Qual o sentido do Mundo? E do Homem? E a finalidade da Criação?</p><div>Neste Reencontro, partindo da análise da realidade, e tendo como base a revelação cristã, procuramos discernir o sentido da pessoa humana como parte integrante da criação...."]);
        TipoEncontro::create(["nome_encontro" => "Reencontro Doutrina Social da Igreja", "tipo_encontros" => "Reencontro", "descricao" => "<p>Descobrir através deste curso a DSI é encontrarmo-nos com o papel social da Igreja do mundo e confrontarmo-nos com as consequências de sermos cristãos.</p><div>A DSI surgiu do confronto do Evangelho com a vivência dos pobres,  numa tentativa de ..."]);
        TipoEncontro::create(["nome_encontro" => "Reencontro de Afectividade e Sexualidade", "tipo_encontros" => "Reencontro", "descricao" => ""]);
        TipoEncontro::create(["nome_encontro" => "Grande Encontro", "tipo_encontros" => "GE", "descricao" => ""]);

    }
}
