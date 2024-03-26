<?php
namespace App\Actions\Dashboard\Category;

use App\Actions\Dashboard\Category\base\CategoryBaseAction;
use App\Http\Requests\Dashboard\Category\CreateCategoryRequest;

class CreateCategoryAction extends CategoryBaseAction{
    public function handel(CreateCategoryRequest $request){
        return $this->repository->create($request->validated());
    }
}
