<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        Model::unguard();
        //Eloquent::unguard();
        //$this->call('UserTableSeeder');

        Model::reguard();
    }
}
