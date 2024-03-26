<?php

namespace App\Http\Controllers\Dashboard;

use App\Actions\Dashboard\Discount\CreateDiscountAction;
use App\Actions\Dashboard\Discount\DeleteDiscountAction;
use App\Actions\Dashboard\Discount\GetAllDiscountAction;
use App\Actions\Dashboard\Discount\UpdateDiscountAction;
use App\Http\Controllers\Controller;

use App\Enums\ResponseEnum;
use Illuminate\Http\Request;
use App\Http\Requests\Dashboard\Discount\CreateDiscountRequest;
use App\Http\Requests\Dashboard\Discount\DeleteDiscountRequest;
use App\Http\Requests\Dashboard\Discount\GetOneDiscountRequest;
use App\Http\Requests\Dashboard\Discount\UpdateDiscountRequest;
use App\Http\Requests\Dashboard\Discount\GetAllDiscountRequest;

use App\Http\Resources\Dashboard\Discount\GetAllDiscountResource;
use App\Http\Resources\Dashboard\Discount\GetOneDiscountResource;
class DiscountController extends Controller
{


    public  function  getAll(GetAllDiscountRequest $request , GetAllDiscountAction $getAllDiscountAction){

        $data = $getAllDiscountAction->handel();
        $response =  GetAllDiscountResource::collection($data);

        return $this->sendResponse(ResponseEnum::GET ,$response );

    }
    public  function  create(CreateDiscountRequest $request , CreateDiscountAction $createDiscountAction){

        $data = $createDiscountAction->handel($request);

        return $this->sendResponse(ResponseEnum::ADD ,$data );

    }
    public  function  update(UpdateDiscountRequest $request , UpdateDiscountAction $updateDiscountAction){

        $data = $updateDiscountAction->handel($request);

        return $this->sendResponse(ResponseEnum::UPDATE ,$data );

    }
    public  function  delete(DeleteDiscountRequest $request , DeleteDiscountAction $deleteDiscountAction){

        $data = $deleteDiscountAction->handel($request);

        return $this->sendResponse(ResponseEnum::DELETE ,$data );

    }

}
