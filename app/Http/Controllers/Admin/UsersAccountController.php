<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UsersAccountController extends Controller
{
    public function index()
    {
        $users = User::whereHas('roles', function ($query) {
            $query->where('name', 'user');
        })->get();

        $data = [
            'users' => $users,
        ];

        return view('admin.pages.users.index', $data);
    }

    public function resetPassword($id)
    {
        DB::beginTransaction();
        try {
            //code...

            $user = User::find($id);
            $user->password = bcrypt('password');
            $user->save();

            DB::commit();
            return redirect()->back()->with('success', 'Password reset successfully');
        } catch (\Throwable $th) {
            DB::rollBack();
            return redirect()->back()->with('error', 'Password reset failed');
        }
    }
}
