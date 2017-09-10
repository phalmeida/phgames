<?php

use Illuminate\Database\Seeder;

class LigasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ligas = [
            [
                'name' => 'Liga Inglesa',
                'image' => 'emb_0009_f_l.png',
                'category_id' => 1,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'name' => '2.ª Divisão Inglesa',
                'image' => 'emb_0066_f_l.png',
                'category_id' => 1,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'name' => 'Ligue 1',
                'image' => 'emb_0012_r_l.png',
                'category_id' => 1,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'name' => 'Ligue 2',
                'image' => 'emb_0068_r_l.png',
                'category_id' => 1,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'name' => 'Liga Italiana',
                'image' => 'emb_0010_f_l.png',
                'category_id' => 1,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'name' => '2.ª Divisão de Itália',
                'image' => 'emb_0069_f_l.png',
                'category_id' => 1,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'name' => 'Eredivisie',
                'image' => 'emb_0013_r_l.png',
                'category_id' => 1,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'name' => 'Liga Espanhola',
                'image' => 'emb_0011_f_l.png',
                'category_id' => 1,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'name' => '2.ª Divisão Espanhola',
                'image' => 'emb_0067_f_l.png',
                'category_id' => 1,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'name' => 'Liga Portuguesa',
                'image' => 'emb_0014_f_l.png',
                'category_id' => 1,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'name' => 'Outras Equipas (Europa)',
                'image' => 'emblemOther-clublEurope_l.png',
                'category_id' => 1,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'name' => 'CAMPEONATO BRASILEIRO',
                'image' => 'emb_0021_r_l.png',
                'category_id' => 1,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'name' => 'Liga Argentina',
                'image' => 'emb_0022_f_l.png',
                'category_id' => 1,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'name' => 'Liga Chilena',
                'image' => 'emb_0023_f_l.png',
                'category_id' => 1,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'name' => 'Outras Equipas (Am. Lat.)',
                'image' => 'emblemOther-clubLatinAmerica_l.png',
                'category_id' => 1,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'name' => 'AFC Champions League',
                'image' => 'emb_0008_r_s1_l.png',
                'category_id' => 1,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'name' => 'Europa',
                'image' => 'emblemOther-nationalEurope_l.png',
                'category_id' => 2,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'name' => 'África',
                'image' => 'emblemOther-nationalAfrica_l.png',
                'category_id' => 2,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'name' => 'América Norte e Central',
                'image' => 'emblemOther-nationalNorthAmerica_l.png',
                'category_id' => 2,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'name' => 'América do Sul',
                'image' => 'emblemOther-nationalLatinAmerica_l.png',
                'category_id' => 2,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'name' => 'Ásia/Oceânia',
                'image' => 'emblemOther-nationalAsia_l.png',
                'category_id' => 2,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'name' => 'Equipas Clássicas',
                'image' => 'emblemOther-classic_l.png',
                'category_id' => 3,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],

        ];

        DB::table('ligas')->insert($ligas);
    }
}
