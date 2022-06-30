<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Content;

class Category extends Model
{
    protected $table = 'categories';
    protected $fillable = ['name'];

    public function content(){
        return $this->hasMany(Content::class,'category_id','id');
    }
}
