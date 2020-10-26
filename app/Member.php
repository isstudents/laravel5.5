<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model{
    public static function getMember(){
        return '我是模型';
    }
}