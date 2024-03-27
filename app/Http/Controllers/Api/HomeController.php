<?php

namespace App\Http\Controllers\Api;

use App\Actions\Api\GetHomeDataAction;
use App\Actions\Api\GetItemAction;
use App\Enums\ResponseEnum;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\ItemRequest;
use App\Http\Resources\Api\Item\GetAllItemCollection;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function getHomeData(GetHomeDataAction $getHomeDataAction){

        $data = $getHomeDataAction->handel();

        return $this->sendResponse(ResponseEnum::GET , $data);
    }
    public function getItem(ItemRequest  $request , GetItemAction $getItemAction){
        $data = $getItemAction->handel($request);
        $response = new GetAllItemCollection($data);
        return $this->sendResponse(ResponseEnum::GET ,$response);

    }
}
