<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Salaries extends Model
{
    use HasFactory;
    protected $fillable = [
        'salary_scale','type',
        'employee_id',
        'salary_amount',
        'housing_allowance',
        'transport_allowance',
        'lunch_allowance',
        'employee_id',
         'bonus'
    ];

    public function employee()
    {
        return $this->belongsTo(Employee::class, 'employee_id', 'id');
    }
}

