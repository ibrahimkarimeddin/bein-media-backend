<?php
namespace App\Actions\Dashboard\Category;

use App\Actions\Dashboard\Category\base\CategoryBaseAction;
use App\Http\Requests\Dashboard\Category\CreateCategoryRequest;
use App\Http\Requests\Dashboard\Category\DeleteCategoryRequest;

class DeleteCategoryAction extends CategoryBaseAction{

    public function handel(DeleteCategoryRequest $request){
        return $this->repository->delete($request->id);
    }
}
