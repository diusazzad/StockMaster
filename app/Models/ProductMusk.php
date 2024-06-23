<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductMusk extends Model
{
    use HasFactory;

    protected $table = 'product_masuk';

    protected $fillable = ['product_id', 'suplier_id', 'qty', 'tanggal'];

    protected $hidden = ['created_at', 'updated_at'];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function supplier()
    {
        return $this->belongsTo(Suplier::class);
    }
}
