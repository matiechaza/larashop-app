<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Customer extends Model
{
    use HasFactory;

    protected $table = 'customers';

    protected $fillable = [
        'email',
        'firstname',
        'lastname',
        'company_name',
        'phone',
    ];

    public function cart(): HasOne
    {
        return $this->hasOne(Cart::class);
    }
}
