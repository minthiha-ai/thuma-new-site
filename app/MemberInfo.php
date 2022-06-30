<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MemberInfo extends Model
{
    protected $table = 'member_info';
    protected $filliable = ['photo','name','dob','email','education','job','position','description'];
}
