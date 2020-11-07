<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DailyService extends Model {
	use HasFactory;

	protected $fillable = ['ticket', 'id_salon_service', 'service_price', 'commission', 'id_user', 'commission_amount'];
}
