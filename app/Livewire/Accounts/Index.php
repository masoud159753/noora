<?php

namespace App\Livewire\Accounts;

use Livewire\Component;

class Index extends Component
{

    public function delete(Account $account)
    {
        $account->delete();
    }

    public function render()
    {
        return view('livewire.accounts.index');
    }
}
