<?php
namespace App\Actions\Dashboard\Category;
use App\Actions\Dashboard\Category\base\CategoryBaseAction;



class GetAllCategoryAction extends CategoryBaseAction{


    public function handel(){
        return $this->repository->getAll(false);
    }
}
