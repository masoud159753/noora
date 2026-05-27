<?php

namespace App\Livewire\Transactions;

use App\Models\Account;
use App\Models\Transaction;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class CreateTransaction extends Component
{
    public $trans_type = 'income';

    public $account_id;
    public $from_account_id;
    public $to_account_id;

    public $amount;

    public $description;

    public $date;

    public $transactions=[];

    public function save()
    {

        session()->flash('success', $this->account_id);


        $this->validate($this->rules());

        DB::transaction(function () {

            /*
            |--------------------------------------------------------------------------
            | Income
            |--------------------------------------------------------------------------
            */

            if ($this->trans_type === 'income') {

                $account = Account::findOrFail($this->account_id);

                Transaction::create([
                    'user_id' => auth()->id(),
                    'type' => 'income',
                    'account_id' => $account->id,
                    'amount' => $this->amount,
                    'description' => $this->description,
                    'date' => $this->date,
                ]);

                $account->increment('balance', $this->amount);
            }

            /*
            |--------------------------------------------------------------------------
            | Expense
            |--------------------------------------------------------------------------
            */

            if ($this->trans_type === 'expense') {

                $account = Account::findOrFail($this->account_id);

                if ($account->balance < $this->amount) {
                    throw new \Exception('Insufficient balance');
                }

                Transaction::create([
                    'user_id' => auth()->id(),
                    'type' => 'expense',
                    'account_id' => $account->id,
                    'amount' => $this->amount,
                    'description' => $this->description,
                    'date' => $this->date,
                ]);

                $account->decrement('balance', $this->amount);
            }

            /*
            |--------------------------------------------------------------------------
            | Transfer
            |--------------------------------------------------------------------------
            */

            if ($this->trans_type === 'transfer') {

                $from = Account::findOrFail($this->from_account_id);

                $to = Account::findOrFail($this->to_account_id);

                if ($from->balance < $this->amount) {
                    throw new \Exception('Insufficient balance');
                }

                Transaction::create([
                    'user_id' => auth()->id(),
                    'type' => 'transfer',
                    'from_account_id' => $from->id,
                    'to_account_id' => $to->id,
                    'amount' => $this->amount,
                    'description' => $this->description,
                    'date' => $this->date,
                ]);

                $from->decrement('balance', $this->amount);

                $to->increment('balance', $this->amount);
            }
        });

        $this->loadTransaction();

        session()->flash('success', 'Transaction created');

        $this->reset([
            'amount',
            'description',
            'account_id',
            'from_account_id',
            'to_account_id',
        ]);
    }

    /*
    |--------------------------------------------------------------------------
    | Validation Rules
    |--------------------------------------------------------------------------
    */

    protected function rules()
    {
        return [

            'trans_type' => 'required|in:income,expense,transfer',

            'amount' => 'required|numeric|min:0.01',

            'description' => 'nullable|string',

            'date' => 'nullable|date',

            'account_id' => [
                'nullable',
                'required_if:trans_type,income,expense',
            ],

            'from_account_id' => [
                'nullable',
                'required_if:trans_type,transfer',
            ],

            'to_account_id' => [
                'nullable',
                'required_if:trans_type,transfer',
                'different:from_account_id',
            ],
        ];
    }

    public function mount()
    {
        $this->loadTransaction();
    }

    public function loadTransaction()
    {
        $this->transactions = Transaction::where('user_id', auth()->id())
            ->latest()
            ->get();
    }

    public function render()
    {

        return view('livewire.transactions.create-transaction',
            ['accounts'=>Account::where('user_id', auth()->id())->get()]
        );

    }
}

