<?php
namespace App\Actions\Dashboard\Item;

use App\Actions\Dashboard\Item\base\ItemBaseAction;
use App\Http\Requests\Dashboard\Item\UpdateItemRequest;
use App\Models\Category;

class UpdateItemAction extends ItemBaseAction{

    public function handel(UpdateItemRequest $request){



           // check if there is children have this category for parent
           $is_have_category_in_same_level = Category::where('parent_id' , $request->category_id)->exists();

           if($is_have_category_in_same_level){
             return false;
           }
        $data = $request->validated();

        $data['discount_id'] = isset($data['discount_id']) ? $data['discount_id'] :null;
        return $this->repository->edit($request->id , $data);
    }
}
