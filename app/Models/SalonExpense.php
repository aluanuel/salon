<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalonExpense extends Model {
	use HasFactory;

	protected $fillable = ['expense_name'];
}
