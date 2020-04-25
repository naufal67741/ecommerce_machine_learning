<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Item extends Model
{
    protected $fillable = ['name','cluster_id','image','phone', 'description', 'stock','sweetness','spicy','malty','price','cart_id'];

    protected $guarded = ['id'];

    use SoftDeletes;
    protected $dates = ['deleted_at'];

    public function cluster(){
        return $this->belongsTo('App\Cluster');
    }
    public function cart(){
        return $this->hasMany('App\Cart');
    }
}
