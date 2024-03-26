<?php
namespace App\Actions\Dashboard\Discount;

use App\Actions\Dashboard\Discount\base\DiscountBaseAction;
use App\Http\Requests\Dashboard\Discount\CreateDiscountRequest;

class CreateDiscountAction extends DiscountBaseAction{
    public function handel(CreateDiscountRequest $request){
        return $this->repository->create($request->validated());
    }
}
