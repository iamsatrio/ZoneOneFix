<?php

namespace App\Http\Controllers;

use App\DetailTransaction;
use App\Transaction;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user()->role == 'user') {
            $transactions = Transaction::where('user_id', Auth::user()->id)->get();
            return view('user.invoice_list', compact('transactions'));
        } else {
            $transactions = Transaction::all();
            return view('admin.new.invoice_list', compact('transactions'));
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Transaction $transaction
     * @return \Illuminate\Http\Response
     */
    public function show(Transaction $transaction)
    {
        if (Auth::user()->role == 'user') {
            $details = DetailTransaction::where('transaction_id', $transaction->id)->get();
            return view('user.invoice', compact(['transaction', 'details']));
        } else {
            $details = DetailTransaction::where('transaction_id', $transaction->id)->get();
            //dd($transaction->shipment->district->name);
            //dd($transaction->shipment->regency->name);
            //dd($transaction->shipment->province->name);
            return view('admin.new.invoice', compact(['transaction', 'details']));
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Transaction $transaction
     * @return \Illuminate\Http\Response
     */
    public function edit(Transaction $transaction)
    {
        return view('user.payment', compact('transaction'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Transaction $transaction
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Transaction $transaction)
    {
        if (empty($request->status)) {
            if ($request->hasFile('payment_proof')) {
                //dd('gambar ada');
                $payment_proof = $request->file('payment_proof');
                $input['payment_proof'] = Storage::disk('public')->put('payment_proofs', $payment_proof);
                $transaction->update([
                    'payment_proof' => $input['payment_proof'],
                    'status' => 'Paid'
                ]);
                return redirect()->route('transaction.index')->with('success', 'Payment proof has been uploaded');
            } else {
                return redirect()->back()->with('error', 'Payment proof has failed to upload');
            }
        } else {
            if ($transaction->status == 'Paid') {
                $transaction->update([
                    'status' => $request->status
                ]);
                return redirect()->route('transaction.index')->with('success', 'Invoice #' . $transaction->code . ' payment has beed confirmed');
            } else if($transaction->status == 'Declined') {
                $transaction->update([
                    'status' => 'Paid'
                ]);
                return redirect()->route('transaction.index')->with('success', 'Invoice #' . $transaction->code . ' payment has beed updated');
            }


        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Transaction $transaction
     * @return \Illuminate\Http\Response
     */
    public function destroy(Transaction $transaction)
    {
        //
    }
}
