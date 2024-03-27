<?php
namespace App\Models;

use App\Enums\DiscountTypeEnum;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = ['name', 'description', 'price', 'category_id', 'discount_id'];

    protected $hidden =['created_at' , 'updated_at'];
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

        $current_insance = $this;


        // make recursive while to get discount from  the first parent have discount
        while ($current_insance) {

            if ($current_insance->discount) {


                if($current_insance->discount->type == DiscountTypeEnum::PRECENT){
                    return (string)($this->price - (($this->price  *  $current_insance->discount->value)/100) );
                }
                return (string)($this->price  - $current_insance->discount->value);
            }
            $current_insance = $current_insance->category()->first();

            if(!isset($current_insance)){
                return $this->price;
            }
        }

        return null;

    }


    // over write  the base funcion to return the price after discount in all time
    public function toArray()
    {
        $array = parent::toArray();
        $array['price_after_discount'] = $this->price_after_discount;
        return $array;
    }
}
