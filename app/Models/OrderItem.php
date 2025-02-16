<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @mixin IdeHelperOrderItem
 */
class OrderItem extends Model
{
    /** @use HasFactory<\Database\Factories\OrderItemsFactory> */
    use HasFactory;

    protected $fillable = [
        "order_id",
        "product_variant_id",
        "quantity",
        "price"
    ];
    public function order(){
        return $this->belongsTo(Order::class);
    }
    public function variant(){
        return $this->belongsTo(ProductVariant::class);
    }
}
