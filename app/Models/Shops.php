<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Shops extends Model
{
    // 软删除
    use SoftDeletes;

    //设置数据表
    public $table = 'shops';

    // 配置一对多表 用户表
    public function user()
    {
    	return $this->belongsTo('App\Models\Users','uid');
    }

    // 配置一对一表 用户详情表
    public function userinfo()
    {
    	return $this->hasOne('App\Models\UsersInfos','uid');
    }

    // 配置一对多关系
    public function shoporder()
    {
        return $this->hasMany('App\Models\Orders','sid');
    }

    // 配置一对多关系
    public function attr()
    {
        return $this->hasOne('App\Models\Attrs','sid');
    }
}
