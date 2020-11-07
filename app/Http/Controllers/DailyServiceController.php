<?php

namespace App\Http\Controllers;
use DB;
use \App\Models\DailyService;
use \App\Models\SalonService;
use \App\Models\User;

class DailyServiceController extends Controller {

	public function index() {

		$daily = DB::table('daily_services')
			->join('salon_services', 'daily_services.id_salon_service', '=', 'salon_services.id')
			->join('users', 'daily_services.id_user', '=', 'users.id')
			->select('users.name', 'salon_services.service_name', 'daily_services.*')
			->orderBy('daily_services.created_at', 'desc')
			->get();

		$salonServices = SalonService::all();

		$users = User::where('usertype', '=', 'Salonist')->get();

		$ticket = $this->ticketNumber();

		return view('services.daily.index', compact('daily', 'salonServices', 'users', 'ticket'));
	}

	public function store() {

		$daily = new DailyService();

		$daily->ticket = request('ticket');
		$daily->id_salon_service = request('id_salon_service');
		$daily->service_price = request('service_price');
		$daily->commission = request('commission');
		$daily->id_user = request('id_user');
		$daily->commission_amount = request('commission_amount');
		$daily->save();
		return redirect()->back();
	}

	public function transactions() {

		return view('services.report.index');
	}

	public function commission() {

		return view('services.report.commission.index');
	}

	private function ticketNumber() {

		$id = DailyService::latest('id')->first();

		if (is_null($id)) {

			return (1001);

		} elseif ($id->id < 10) {

			return (1000 . $id->id);

		} elseif ($id->id >= 10 && $id->id < 100) {

			return (100 . $id->id);

		} elseif ($id->id >= 100 && $id->id < 100) {

			return (10 . $id->id);

		} else {
			return $id->id;
		}
	}
}
