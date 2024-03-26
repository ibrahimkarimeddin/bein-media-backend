<?php
namespace App\Actions\Dashboard\Category;

use App\Actions\Dashboard\Category\base\CategoryBaseAction;
use App\Http\Requests\Dashboard\Category\UpdateCategoryRequest;

class UpdateCategoryAction extends CategoryBaseAction{

    public function handel(UpdateCategoryRequest $request){
        $data = $request->validated();
        $data['discount_id'] = isset($data['discount_id']) ? $data['discount_id'] :null;
        $data['parent_id'] = isset($data['parent_id']) ? $data['parent_id'] :null;

         return $this->repository->edit($request->id , $data);
    }
}
