<?php
namespace App\Actions\Dashboard\Item;

use App\Actions\Dashboard\Item\base\ItemBaseAction;
use App\Http\Requests\Dashboard\Item\GetOneItemRequest;
use App\Http\Requests\Dashboard\Item\UpdateItemRequest;

class GetOneItemAction extends ItemBaseAction{

    public function handel(GetOneItemRequest $request){
        return $this->repository->findByIDWithRelation($request->id );
    }
}
