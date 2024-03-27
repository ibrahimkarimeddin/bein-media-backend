<?php
namespace App\Actions\Dashboard\Item;

use App\Actions\Dashboard\Item\base\ItemBaseAction;
use App\Http\Requests\Dashboard\Item\CreateItemRequest;
use App\Models\Category;

class CreateItemAction extends ItemBaseAction{
    public function handel(CreateItemRequest $request){



        // check if there is children have this category for parent
          $is_have_category_in_same_level = Category::where('parent_id' , $request->category_id)->exists();

          if($is_have_category_in_same_level){
            return false;
          }
        return $this->repository->create($request->validated());
    }
}
