<?php
namespace App\Actions\Dashboard\Category;

use App\Actions\Dashboard\Category\base\CategoryBaseAction;
use App\Http\Requests\Dashboard\Category\UpdateCategoryRequest;
use App\Models\Category;

class UpdateCategoryAction extends CategoryBaseAction{

    public function handel(UpdateCategoryRequest $request){

        if(isset($request->parent_id)){

            // the ?  => is  for null safty check if there is no category with this parent will not make error
             $is_have_the_parent_item_in_his_children  = Category::where('id' , $request->parent_id)->first()?->items()->exists();

             if($is_have_the_parent_item_in_his_children){
                return false;
             }
        }

        $data = $request->validated();
        $data['discount_id'] = isset($data['discount_id']) ? $data['discount_id'] :null;
        $data['parent_id'] = isset($data['parent_id']) ? $data['parent_id'] :null;

         return $this->repository->edit($request->id , $data);
    }
}
