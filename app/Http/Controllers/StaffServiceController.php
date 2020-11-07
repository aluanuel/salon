<?php

namespace App\Http\Controllers;

use DB;
use \App\Models\SalonService;
use \App\Models\StaffService;
use \App\Models\User;

class StaffServiceController extends Controller {
	public function index() {

		$staffServices = DB::table('staff_services')
			->join('users', 'staff_services.id_user', '=', 'users.id')
			->join('salon_services', 'staff_services.id_salon_service', '=', 'salon_services.id')
			->select('users.name', 'users.telephone', 'staff_services.*', 'salon_services.service_name')
			->get();

		$salonServices = SalonService::all();

		$users = User::where('usertype', '=', 'Salonist')->get();

		return view('services.assign.index', compact('users', 'salonServices', 'staffServices'));
	}

	public function store() {

		StaffService::create($this->validateInput());

		return redirect()->back();
	}

	protected function validateInput() {

		return $data = request()->validate([
			'id_user' => 'required',
			'id_salon_service' => 'required',
		]);
	}
}
