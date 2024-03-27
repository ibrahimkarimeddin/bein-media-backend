<?php
namespace App\Actions\Api;

use App\Actions\Dashboard\Item\base\ItemBaseAction;
use App\Http\Requests\Api\ItemRequest;

class GetItemAction extends ItemBaseAction{

    public function handel(ItemRequest $request){

        return $this->repository->getAll(true ,$request->per_page ?? 8 , $request->search );
    }
}
