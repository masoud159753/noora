<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AccountController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return Account::where('user_id', auth()->id())
            ->latest()
            ->get();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $data = $request->validate([
            'name' => 'required',
            'type' => 'required',
            'balance' => 'numeric|min:0',
        ]);

        return Account::create([
            'user_id' => auth()->id(),
            ...$data
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Account $account)
    {
        //
        abort_if($account->user_id !== auth()->id(), 403);

        $account->update($request->only(['name', 'type']));

        return $account;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Account $account)
    {
        //
        abort_if($account->user_id !== auth()->id(), 403);

        $account->delete();

        return response()->noContent();
    }


}
