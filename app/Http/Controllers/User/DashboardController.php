<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request)
    {


        $expense_categories = Category::where('type', 'expense')->get();
        $income_categories = Category::where('type', 'income')->get();
        $transactions = auth()->user()->transactions()->latest()->get();
        $sum_expense = $transactions->filter(function ($transaction) {
            return $transaction->category->type == 'expense';
        })->sum('amount');

        $sum_income = $transactions->filter(function ($transaction) {
            return $transaction->category->type == 'income';
        })->sum('amount');

        $sum = [
            'expense' => $sum_expense,
            'income' => $sum_income,
        ];

        $categories = [
            'expense' => $expense_categories,
            'income' => $income_categories,
        ];

        if ($request->type) {
            $filter_type = $request->type;

            $transactions = $transactions->filter(function ($transaction) use ($filter_type) {
                return $transaction->category->type == $filter_type;
            });
        }

        $data = [
            'categories' => $categories,
            'transactions' => $transactions,
            'sum' => $sum,
            'filter_type' => $filter_type ?? false,
        ];

        return view('user.dashboard.index', $data);
    }
}
