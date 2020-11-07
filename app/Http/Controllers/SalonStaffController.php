<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class SalonStaffController extends Controller {

	public function index() {

		$randomPassword = $this->randomPassword();

		$users = User::all();

		return view('services.staff.index', compact('randomPassword', 'users'));
	}

	public function create() {

		$user = new User();

		$user->name = request('name');

		$user->telephone = request('telephone');

		$user->email = request('email');

		$user->usertype = request('usertype');

		$user->password = Hash::make(request('password'));

		$user->save();

		return redirect()->back();
	}

	protected function randomPassword() {

		$alphabet = "abcdefghijklmnpqrstuvwxyz123456789";

		$pass = array();

		$alphaLength = strlen($alphabet) - 1;

		for ($i = 0; $i < 8; $i++) {

			$n = rand(0, $alphaLength);

			$pass[] = $alphabet[$n];
		}
		return implode($pass);
	}

}
