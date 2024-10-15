<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class purchase extends Model
{
    use HasFactory;
    protected $fillable=[
        'suppliers',
        'date',
        'purchase_no',
        'status',
        'total_amount',
        'users',
    ];

    /**
     * Get all of the comments for the purchase
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function purchase_details(): HasMany
    {
        return $this->hasMany(PurchaseDetail::class);
    }
}
