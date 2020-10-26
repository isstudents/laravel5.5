<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class rbac extends Model{
    //指定数据表
    protected $table = 'index1';
    //指定id
    protected $primaryKey = 'id';
    //不想要时间
    public $timestamps = false;

    protected function getDateFormat()
    {
        return time();
    }
}
