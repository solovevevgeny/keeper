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
        $Account->start_amount = 0;
        $Account->amount = 0;
        $Account->save();

        $Account = new Account();
        $Account->name = "Карта Альфабанка";
        $Account->start_amount = 0;
        $Account->amount = 0;
        $Account->save();

        $Account = new Account();
        $Account->name = "Карта ВТБ";
        $Account->start_amount = 0;
        $Account->amount = 0;
        $Account->save();

        $Account = new Account();
        $Account->name = "Депозит Альфабанка";
        $Account->start_amount = 10000;
        $Account->amount = $Account->start_amount;
        $Account->save();
    }
}
