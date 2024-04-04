<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class TransactionController extends Controller
{
    public function store(Request $request)
    {
        // return $request;
        // validate the request
        $request->validate([
            'amount' => 'required|numeric',
            'category' => 'required|exists:categories,id',
            'type' => 'required|in:expense,income',
            'description' => 'nullable|string',
            // "04/23/2024"
            'date' => 'required|date_format:m/d/Y',
        ]);


        // $newDate = date("d-m-Y", strtotime($originalDate))
        // create the transaction
        DB::beginTransaction();
        try {
            $transaction = Transaction::create([
                'amount' => $request->amount,
                'category_id' => $request->category,
                'type' => $request->type,
                'description' => $request->description,
                'date' => date('Y-m-d', strtotime($request->date)),
                'user_id' => auth()->id(),
            ]);


            DB::commit();

            Alert::success('Success', 'Transaction created successfully');
            return redirect()->route('user.dashboard.index');
        } catch (\Throwable $th) {
            //throw $th;
            //     DB::rollBack();

            Alert::error('Error', $th->getMessage());
            //     // $request->session()->flash('error', $th->getMessage());
            return redirect()->back()->with('error', $th->getMessage());
        }

        // return $request;
    }

    public function destroy($id)
    {
        // return $id;
        DB::beginTransaction();
        try {
            $transaction = Transaction::findOrFail($id);
            $transaction->delete();

            DB::commit();
            Alert::success('Success', 'Transaction deleted successfully');
            return redirect()->route('user.dashboard.index');
        } catch (\Throwable $th) {

            DB::rollBack();
            Alert::error('Error', $th->getMessage());
            return redirect()->back();
            //throw $th;
        }
    }

    public function update(Request $request, $id)
    {

        return $request;
    }
}
