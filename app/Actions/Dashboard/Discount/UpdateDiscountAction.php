<?php
namespace App\Actions\Dashboard\Discount;

use App\Actions\Dashboard\Discount\base\DiscountBaseAction;
use App\Http\Requests\Dashboard\Discount\UpdateDiscountRequest;

class UpdateDiscountAction extends DiscountBaseAction{

    public function handel(UpdateDiscountRequest $request){
        return $this->repository->edit($request->id , $request->validated());
    }
}
