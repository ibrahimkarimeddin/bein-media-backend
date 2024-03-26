<?php
namespace App\Models;

use Attribute;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = ['name', 'description', 'price', 'category_id', 'discount_id'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function discount()
    {
        return $this->belongsTo(Discount::class);
    }
    public function getPriceAfterDiscountAttribute()
    {
        $entity = $this; // Can be either an Item or a Category instance
        while ($entity) {

            if ($entity->discount) {


                return (string)($this->price  +  $entity->discount->value);
            }
            $entity = $entity->category()->first();

            if(!isset($entity)){
                return $this->price;
            }
        }
        return null; // No discount found
    }


    public function toArray()
    {
        $array = parent::toArray();
        $array['price_after_discount'] = $this->price_after_discount;
        return $array;
    }
}
