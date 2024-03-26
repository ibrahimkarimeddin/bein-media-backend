<?php
namespace App\Actions\Dashboard\Item;

use App\Actions\Dashboard\Item\base\ItemBaseAction;
use App\Http\Requests\Dashboard\Item\DeleteItemRequest;

class DeleteItemAction extends ItemBaseAction{

    public function handel(DeleteItemRequest $request){
        return $this->repository->delete($request->id);
    }
}
