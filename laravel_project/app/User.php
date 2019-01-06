<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'users';

    protected $guarded = [];

    public $timestamps = true;

    public function checkLogin(){
        $data = $this->table;
        dd($data->all());
    }
}
