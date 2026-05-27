<?php

namespace App\Livewire\Accounts;

use App\Models\Account;
use Livewire\Component;

class Create extends Component
{

    public $name, $type, $balance = 0;

    public function save()
    {
        $this->validate([
            'name' => 'required|string',
            'type' => 'required|string',
            'balance' => 'numeric|min:0',
        ]);

        Account::create([
            'user_id' => auth()->id(),
            'name' => $this->name,
            'type' => $this->type,
            'balance' => $this->balance,
        ]);

        $this->reset(['name', 'type', 'balance']);

        session()->flash('success', 'حساب جدید ساخته شد');
    }
}
