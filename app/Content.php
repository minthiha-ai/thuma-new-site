<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Category;

class Content extends Model
{
    protected $table = 'contents';
    protected $fillable = ['title','category_id','contents','date','author','photos'];

    public function content_category(){
        return $this->belongsTo(Category::class,'category_id','id');
    }
}
