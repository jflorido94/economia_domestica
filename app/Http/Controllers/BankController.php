<?php

namespace App\Http\Controllers;

use App\Models\Bank;
use App\Http\Requests\StoreBankRequest;
use App\Http\Requests\UpdateBankRequest;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class BankController extends Controller
{
    use AuthorizesRequests;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // if (!auth()->user()->can('view banks')) {
        //     abort(403);
        // }
        $banks = Bank::all();
        return View('banks.index', compact('banks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // $this->authorize('create', Bank::class);
        return View('banks.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBankRequest $request)
    {
        // $this->authorize('create', Bank::class);
        // dd($request);
        $bank = Bank::create($request->validated());
        return redirect()->route('banks.show', $bank);
    }

    /**
     * Display the specified resource.
     */
    public function show(Bank $bank)
    {
        // $this->authorize('view', $bank);
        return View('banks.show', compact('bank'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Bank $bank)
    {
        // $this->authorize('update', $bank);
        return View('banks.edit', compact('bank'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBankRequest $request, Bank $bank)
    {
        // $this->authorize('update', $bank);
        $bank->update($request->validated());
        return redirect()->route('banks.show', $bank);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Bank $bank)
    {
        // $this->authorize('delete', $bank);
        $bank->delete();
        return redirect()->route('banks.index');
    }

    /**
     * Authorize the user for the given action.
     */
    // protected function authorize($ability, $bank)
    // {
    //     if (!Auth::user()->can($ability, $bank)) {
    //         abort(403, 'Unauthorized action.');
    //     }
    // }
}
