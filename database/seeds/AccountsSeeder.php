<?php

use Illuminate\Database\Seeder;
use App\Account;

class AccountsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        $Account = new Account();
        $Account->name = "Карта Сбербанка";
        $Account->start_amount = 10000;
        $Account->amount = 10000;
        $Account->save();

        $Account = new Account();
        $Account->name = "Карта Альфабанка";
        $Account->start_amount = 0;
        $Account->amount = 0;
        $Account->save();

        $Account = new Account();
        $Account->name = "Карта Санкт-Петербурга";
        $Account->start_amount = 1399.53;
        $Account->amount = 1399.53;
        $Account->save();

        $Account = new Account();
        $Account->name = "Сейф";
        $Account->start_amount = 0;
        $Account->amount = $Account->start_amount;
        $Account->save();

        $Account = new Account();
        $Account->name = "Кошелек";
        $Account->start_amount = 0;
        $Account->amount = $Account->start_amount;
        $Account->save();
    }
}
