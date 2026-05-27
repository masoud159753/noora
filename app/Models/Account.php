<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    //
   protected $guarded = [];


    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }

    public function outgoingTransfers()
    {
        return $this->hasMany(Transaction::class, 'from_account_id');
    }

    public function incomingTransfers()
    {
        return $this->hasMany(Transaction::class, 'to_account_id');
    }

}
