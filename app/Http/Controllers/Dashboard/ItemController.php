<?php

namespace App\Http\Controllers\Dashboard;

use App\Actions\Dashboard\Item\CreateItemAction;
use App\Actions\Dashboard\Item\DeleteItemAction;
use App\Actions\Dashboard\Item\GetAllItemAction;
use App\Actions\Dashboard\Item\GetOneItemAction;
use App\Actions\Dashboard\Item\UpdateItemAction;
use App\Http\Controllers\Controller;

use App\Enums\ResponseEnum;
use App\Http\Resources\Dashboard\Item\GetAllItemCollection;
use Illuminate\Http\Request;
use App\Http\Requests\Dashboard\Item\CreateItemRequest;
use App\Http\Requests\Dashboard\Item\DeleteItemRequest;
use App\Http\Requests\Dashboard\Item\GetOneItemRequest;
use App\Http\Requests\Dashboard\Item\UpdateItemRequest;
use App\Http\Requests\Dashboard\Item\GetAllItemRequest;

use App\Http\Resources\Dashboard\Item\GetAllItemResource;
use App\Http\Resources\Dashboard\Item\GetOneItemResource;
class ItemController extends Controller
{


    public  function  getOne(GetOneItemRequest $request , GetOneItemAction $getOneItemAction){

        $data = $getOneItemAction->handel($request);
        $response =  new GetOneItemResource($data);

        return $this->sendResponse(ResponseEnum::GET ,$response );

    }
    public  function  getAll(GetAllItemRequest $request , GetAllItemAction $getAllItemAction){

         $data = $getAllItemAction->handel();

        $response =  new GetAllItemCollection($data);

        return $this->sendResponse(ResponseEnum::GET ,$response );

    }
    public  function  create(CreateItemRequest $request , CreateItemAction $createItemAction){

         $data = $createItemAction->handel($request);

         if(!$data){
            return $this->sendError("There Are Sub Category For This Category ");
         }
        return $this->sendResponse(ResponseEnum::ADD ,$data );

    }
    public  function  update(UpdateItemRequest $request , UpdateItemAction $updateItemAction){

        $data = $updateItemAction->handel($request);

        if(!$data){
            return $this->sendError("There Are Sub Category For This Category ");
         }
        return $this->sendResponse(ResponseEnum::UPDATE ,$data );

    }
    public  function  delete(DeleteItemRequest $request , DeleteItemAction $deleteItemAction){

        $data = $deleteItemAction->handel($request);

        return $this->sendResponse(ResponseEnum::DELETE ,$data );

    }

}
