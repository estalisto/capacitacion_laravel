<?php

namespace App\Core\Eloquent;

use Illuminate\Database\Eloquent\Model;
use Str;
class Category extends Model
{
 protected $table = 'categories';
 //protected $connection='pgsql';
 protected $fillable=['name','description'];
 public static function boot(){
     static::creating(function($model){
         $model->slug=Str::slug($model->name);
         $model->create_user=1;
         $model->updated_user=1;
     });
     static::updating(function($model){
        $model->updated_user=1;
     });

     parent::boot();
 }

}
