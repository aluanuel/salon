<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StaffService extends Model {
	use HasFactory;

	protected $fillable = ['id_user', 'id_salon_service'];
}
