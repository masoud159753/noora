<?php

namespace App\Livewire\Accounts;

use Livewire\Component;

class Edit extends Component
{

    public Account $account;

    public $name, $type;

    public function mount(Account $account)
    {
        $this->account = $account;
        $this->name = $account->name;
        $this->type = $account->type;
    }

    public function update()
    {
        $this->validate([
            'name' => 'required',
            'type' => 'required',
        ]);

        $this->account->update([
            'name' => $this->name,
            'type' => $this->type,
        ]);

        session()->flash('success', 'Updated');
    }

    public function render()
    {
        return view('livewire.accounts.edit');
    }
}
