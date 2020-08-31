<?php

use Illuminate\Database\Seeder;
use App\Operation;

class OperationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        $operation = new Operation();
        $operation->account_from = 1;
        $operation->account_to   = 2;
        $operation->amount =  1002;
        $operation->comment = "Перевод со счета Альфабанка в Сбербанк";
        $operation->save();

        $operation = new Operation();
        $operation->account_from = 2;
        $operation->account_to   = 1;
        $operation->amount =  1002;
        $operation->comment = "Перевод со счета из Сбербанка Альфабанк";
        $operation->save();

        $operation = new Operation();
        $operation->account_from = 2;
        $operation->amount =  500;
        $operation->comment = "Бензин";
        $operation->save();
    }
}
