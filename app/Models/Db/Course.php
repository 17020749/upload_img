<?php

namespace App\Models\Db;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
  
    protected $fillable = ['course_code','course_name'];
      use HasFactory;
}
