<?php

namespace App;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Cluster extends Model
{
    protected $fillable = ['name'];

    protected $guarded = ['id'];

    use SoftDeletes;
    protected $dates = ['deleted_at'];

    public function user(){
        return $this->hasMany('App\User');
    }

    public function item(){
        return $this->hasMany('App\Item');
    }
}
