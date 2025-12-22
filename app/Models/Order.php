<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Order extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'user_id',
        'order_number',
        'total_price',
        'status', // e.g., pending, processing, shipped, delivered, cancelled
        'payment_status', // e.g., unpaid, paid, refunded
        'payment_method', // e.g., stripe, paypal, cod
        'shipping_address',
        'city',
        'postal_code',
        'phone',
        'notes',
    ];

    /**
     * Get the user that placed the order.
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the items (products) associated with this order.
     * Note: You will need an OrderItem model/table to store 
     * the specific price/quantity at the time of purchase.
     */
    public function items(): HasMany
    {
        return $this->hasMany(OrderItem::class);
    }

    /**
     * Helper to check if order is paid.
     */
    public function isPaid(): bool
    {
        return $this->payment_status === 'paid';
    }
}

