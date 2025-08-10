<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ManualPayment extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'plan_name',
        'amount',
        'payment_proof',
        'status',
        // add other fields you want to be mass assignable
    ];
}
