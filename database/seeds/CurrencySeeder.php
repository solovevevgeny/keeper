<?php

use Illuminate\Database\Seeder;
use App\Currency;

class CurrencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        $currency = new Currency();
        $currency->code = 810;
        $currency->sufix = ("RUR");
        $currency->save();

        $currency = new Currency();
        $currency->code = 840;
        $currency->sufix = ("USD");
        $currency->save();

        $currency = new Currency();
        $currency->code = 978;
        $currency->sufix = ("EUR");
        $currency->save();

    }
}
