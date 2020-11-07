<?php

namespace App\Http\Controllers;

use DB;
use \App\Models\SalonService;

class HomeController extends Controller {
	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct() {
		$this->middleware('auth');
	}

	/**
	 * Show the application dashboard.
	 *
	 * @return \Illuminate\Contracts\Support\Renderable
	 */
	public function index() {

		$daily = DB::table('daily_services')
			->join('salon_services', 'daily_services.id_salon_service', '=', 'salon_services.id')
			->select('salon_services.service_name', 'daily_services.*')
			->orderBy('daily_services.created_at', 'desc')
			->get();

		$prices = SalonService::all();

		return view('home', compact('prices', 'daily'));
	}
}
