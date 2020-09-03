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
        $operation->type = "add";
        $operation->account_from = 1;
        $operation->account_to   = 2;
        $operation->amount =  1002;
        $operation->comment = "Возврат долга Семенова";
        $operation->save();

     
    }
}
