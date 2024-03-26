<?php
namespace App\Actions\Dashboard\Item;

use App\Actions\Dashboard\Item\base\ItemBaseAction;
use App\Http\Requests\Dashboard\Item\UpdateItemRequest;

class UpdateItemAction extends ItemBaseAction{

    public function handel(UpdateItemRequest $request){
        return $this->repository->edit($request->id , $request->validated());
    }
}
