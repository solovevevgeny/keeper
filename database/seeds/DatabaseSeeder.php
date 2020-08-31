<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder{
    public function run(){
        $this->call(OperationsSeeder::class);
        $this->call(AccountsSeeder::class);
        $this->call(CategoriesSeeder::class);
    }
}
