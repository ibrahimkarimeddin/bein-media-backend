<?php

namespace App\Http\Controllers\Dashboard;

use App\Actions\Dashboard\Category\CreateCategoryAction;
use App\Actions\Dashboard\Category\DeleteCategoryAction;
use App\Actions\Dashboard\Category\GetAllCategoryAction;
use App\Actions\Dashboard\Category\UpdateCategoryAction;
use App\Http\Controllers\Controller;

use App\Enums\ResponseEnum;
use Illuminate\Http\Request;
use App\Http\Requests\Dashboard\Category\CreateCategoryRequest;
use App\Http\Requests\Dashboard\Category\DeleteCategoryRequest;
use App\Http\Requests\Dashboard\Category\GetOneCategoryRequest;
use App\Http\Requests\Dashboard\Category\UpdateCategoryRequest;
use App\Http\Requests\Dashboard\Category\GetAllCategoryRequest;

use App\Http\Resources\Dashboard\Category\GetAllCategoryResource;
use App\Http\Resources\Dashboard\Category\GetOneCategoryResource;
use App\Repositories\CategoryRepository;

class CategoryController extends Controller
{


    public  function  getAll(GetAllCategoryRequest $request , GetAllCategoryAction $getAllCategoryAction){

        $data = $getAllCategoryAction->handel();
        $response =  GetAllCategoryResource::collection($data);

        return $this->sendResponse(ResponseEnum::GET ,$response );

    }
    public  function  create(CreateCategoryRequest $request , CreateCategoryAction $createCategoryAction){

        $data = $createCategoryAction->handel($request);

        if(!$data){
            return $this->sendError("The Parent Already Have Item Children");
        }
        return $this->sendResponse(ResponseEnum::ADD ,$data );

    }
    public  function  update(UpdateCategoryRequest $request , UpdateCategoryAction $updateCategoryAction){

        $data = $updateCategoryAction->handel($request);

        if(!$data){
            return $this->sendError("The Parent Already Have Item Children");
        }
        return $this->sendResponse(ResponseEnum::UPDATE ,$data );

    }
    public  function  delete(DeleteCategoryRequest $request , DeleteCategoryAction $deleteCategoryAction){

        $data = $deleteCategoryAction->handel($request);

        return $this->sendResponse(ResponseEnum::DELETE ,$data );

    }

}
