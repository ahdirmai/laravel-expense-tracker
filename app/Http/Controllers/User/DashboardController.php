<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {

        $expense_categories = Category::where('type', 'expense')->get();
        $income_categories = Category::where('type', 'income')->get();
        $transactions = auth()->user()->transactions()->latest()->take(5)->get();

        $categories = [
            'expense' => $expense_categories,
            'income' => $income_categories,
        ];
        $data = [
            'categories' => $categories,
            'transactions' => $transactions,
        ];

        return view('user.dashboard.index', $data);
    }
}
