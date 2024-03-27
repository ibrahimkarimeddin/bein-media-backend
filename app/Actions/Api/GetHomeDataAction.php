<?php
namespace App\Actions\Api;

use App\Models\Category;
use App\Models\Item;

class GetHomeDataAction {

    public function handel(){
        $data = [];


        $data['last_item'] = Item::select('id' , 'name'  , 'price')->latest()->limit(4)->get();
        $data['category'] = Category::select('id' , 'name')->getCategoryRoot()->get();


        return $data ;
     }
}
