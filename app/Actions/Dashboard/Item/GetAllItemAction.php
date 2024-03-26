<?php
namespace App\Actions\Dashboard\Item;
use App\Actions\Dashboard\Item\base\ItemBaseAction;

class GetAllItemAction extends ItemBaseAction{


    public function handel(){
        return $this->repository->getAll(true);
    }
}
