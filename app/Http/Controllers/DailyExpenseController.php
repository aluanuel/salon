<?php

namespace App\Http\Controllers;
use DB;
use \App\Models\DailyExpense;
use \App\Models\SalonExpense;

class DailyExpenseController extends Controller {

	public function index() {

		$expenses = DB::table('daily_expenses')
			->join('salon_expenses', 'daily_expenses.id_salon_expense', '=', 'salon_expenses.id')
			->select('daily_expenses.*', 'salon_expenses.*')
			->orderBy('daily_expenses.created_at', 'desc')
			->get();

		return view('services.expense.daily.index', compact('expenses'));
	}

	public function store() {

		$daily = new DailyExpense();

		if (is_numeric(request('id_salon_expense'))) {

			$daily->id_salon_expense = request('id_salon_expense');

			$daily->expense_amount = request('expense_amount');

			$daily->save();

			return redirect()->back();

		} else {

			$salon = new SalonExpense();

			$salon->expense_name = request('expense_name');

			$salon->save();

			$daily->id_salon_expense = $salon->id;

			$daily->expense_amount = request('expense_amount');

			$daily->save();

			return redirect()->back();

		}
	}
}
