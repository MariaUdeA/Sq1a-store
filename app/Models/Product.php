<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @mixin IdeHelperProduct
 */
class Product extends Model
{
    /** @use HasFactory<\Database\Factories\ProductFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'brand',
        'description',
        'price',
        'sale_price',
        'images',
        'rating',
        'review_count',
        "other_attributes"
    ];

    /**
     * Automatic casting for columns
     * @var array
     */
    protected $casts = [
        'images' => 'array',  //this will have to be moved to variants but for now it can wait
        'other_attributes' => 'array', // If you just want to automatically decode JSON
    ];

    public function categories(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(Category::class);
    }

    /**
     * Mutator to convert other attributes to json
     * @param mixed $value
     * @return void
     */
    public function setOtherAttributesAttribute($value){
        $this->attributes["other_attributes"] = json_encode($value);
    }


    /**
     * Get product variants
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function variants(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(ProductVariant::class);
    }
}
