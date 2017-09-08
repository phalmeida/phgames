<?php

use Illuminate\Database\Seeder;

class VersionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $versions = [
          [
              'name' => 'PES 2017 - Pro Evolution Soccer 2017',
              'created_at' => \Carbon\Carbon::now(),
              'updated_at' => \Carbon\Carbon::now(),
          ]
        ];

        DB::table('versions')->insert($versions);
    }
}
