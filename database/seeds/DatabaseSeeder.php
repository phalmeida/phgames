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
        $this->call('UsersTableSeeder');
        $this->call('VersionsTableSeeder');
        $this->call('CategoriesTableSeeder');
        $this->call('LigasTableSeeder');
        $this->call('TeamsTableSeeder');
    }
}
