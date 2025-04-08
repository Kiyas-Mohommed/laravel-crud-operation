<?php

namespace App\Models;

use App\Http\Controllers\StudentController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $table = 'students';
    protected $primarykey = 'id';
    protected $fillable = ['full_name', 'email', 'password', 'mobile', 'subject', 'images'];
}