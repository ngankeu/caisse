<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
	use HasFactory;
	protected $guarded = [];

	public function advance(){
		return $this->belongsTo(AdvanceSalary::class,'id','employee_id');
	}
	public function advanceSalaries()
	{
		return $this->hasMany(AdvanceSalary::class);
	}
	public function salaryPayments(){
		return $this->hasMany(PaySalary::class, 'employee_id', 'id');
	}
}
