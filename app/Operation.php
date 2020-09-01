<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Operation extends Model{

    public function accountFrom() {
        return $this->hasOne('App\Account','id','account_from');
    }

    public function accountTo(){
        return $this->hasOne('App\Account','id','account_to');
    }

    public function category(){
        return $this->hasONe("App\Category",'id','category_id');
    }
  
}
