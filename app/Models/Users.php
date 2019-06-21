<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    //设置数据表
    public $table = 'users';

    // 配置一对一关系
    public function userinfo()
    {
    	return $this->hasOne('App\Models\UsersInfos','uid');
    }

    // 配置一对多关系
    public function userorder()
    {
        return $this->hasMany('App\Models\Orders','uid');
    }
}
