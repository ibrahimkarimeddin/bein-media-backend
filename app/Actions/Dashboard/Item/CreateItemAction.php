<?php
namespace App\Actions\Dashboard\Item;

use App\Actions\Dashboard\Item\base\ItemBaseAction;
use App\Http\Requests\Dashboard\Item\CreateItemRequest;

class CreateItemAction extends ItemBaseAction{
    public function handel(CreateItemRequest $request){
        return $this->repository->create($request->validated());
    }
}
