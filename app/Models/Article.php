<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class article extends Model
{
    use HasFactory;
     
    public $table = "articles";

    protected $fillable=['username','fullname','user_password','user_email'];
}
