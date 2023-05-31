<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Order extends Model
{
    protected $fillable = ['sender_address', 'receiver_address', 'customer_id'];

    public function customer()
    {
        return $this->belongsTo(User::class);
    }
}
