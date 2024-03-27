<?php
namespace App\Actions\Dashboard\Category;

use App\Actions\Dashboard\Category\base\CategoryBaseAction;
use App\Http\Requests\Dashboard\Category\CreateCategoryRequest;
use App\Models\Category;

class CreateCategoryAction extends CategoryBaseAction{
    public function handel(CreateCategoryRequest $request){

        if(isset($request->parent_id)){

            // the ?  => is  for null safty check if there is no category with this parent will not make error
             $is_have_the_parent_item_in_his_children  = Category::where('id' , $request->parent_id)->first()?->items()->exists();

             if($is_have_the_parent_item_in_his_children){
                return false;
             }
        }
        return $this->repository->create($request->validated());
    }
}
