<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Order extends Model
{
    use HasFactory;

    const STATUS_OPEN = 'open';
    const STATUS_CLOSED = 'closed';
    const STATUS_CANCELED = 'canceled';

    protected $table = 'orders';

    protected $fillable = [
        'state',
        'customer_id',
        'billing_id',
        'shipping_id',
        'payment_id',
        'notes',
    ];

    public function cart(): BelongsTo
    {
        return $this->belongsTo(Cart::class);
    }

    public function billing(): HasOne
    {
        return $this->hasOne('billings');
    }

    public function shipping(): HasOne
    {
        return $this->hasOne('shippings');
    }

    public function payment(): HasOne
    {
        return $this->hasOne('payments');
    }
}
