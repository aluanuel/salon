<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDailyServicesTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('daily_services', function (Blueprint $table) {
			$table->id();
			$table->integer('ticket');
			$table->unsignedBigInteger('id_salon_service');
			$table->double('service_price');
			$table->integer('commission');
			$table->unsignedBigInteger('id_user');
			$table->double('commission_amount');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('daily_services');
	}
}
