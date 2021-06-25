<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $table= "user";
   
    protected $fillable = ['employee_code','firstname','idnumber','payroll_category', 'pin','branch_id','lastname'];
}
