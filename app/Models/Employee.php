<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function advance_salaries()
    {
        return $this->hasMany(AdvanceSalary::class);
    }

    public function advance()
    {
        return $this->hasOne(AdvanceSalary::class, 'employee_id', 'id');
    }

    public function salaryPayments(){
        return $this->hasMany(PaySalary::class, 'employee_id', 'id');
    }
}