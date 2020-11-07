<?php

namespace App\Http\Controllers;
use \App\Models\SalonExpense;

class SalonExpenseController extends Controller {

	public function index() {

		$expenses = SalonExpense::all();

		return view('services.expense.index', compact('expenses'));
	}
	public function store() {

		$expense = new SalonExpense();

		$expense->expense_name = request('expense_name');

		$expense->save();

		return redirect()->back();
	}
}
