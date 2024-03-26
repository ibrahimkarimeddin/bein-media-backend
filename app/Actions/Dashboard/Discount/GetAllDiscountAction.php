<?php
namespace App\Actions\Dashboard\Discount;
use App\Actions\Dashboard\Discount\base\DiscountBaseAction;



class GetAllDiscountAction extends DiscountBaseAction{


    public function handel(){
        return $this->repository->getAll(false);
    }
}
