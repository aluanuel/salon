<?php

namespace App\Http\Controllers;
use \App\Models\SalonService;

class SalonServiceController extends Controller {
	public function index() {

		$prices = SalonService::all();

		return view('services.index', compact('prices'));
	}

	public function store() {

		SalonService::create($this->validateService());

		return redirect()->back();
	}

	protected function validateService() {

		return $data = request()->validate([
			'service_name' => 'required',
			'price' => 'required',
			'commission' => 'required',
		]);
	}
}
