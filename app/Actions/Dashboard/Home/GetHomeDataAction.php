<?php
namespace App\Actions\Dashboard\Home;

use App\Models\Category;
use App\Models\Discount;
use App\Models\Item;

class GetHomeDataAction{

    public function handel(){

        $data = [];
        $data['category_count'] = Category::count();
        $data['discount_count'] = Discount::count();
        $data['item_count'] = Item::count();

        return $data;
    }
}
