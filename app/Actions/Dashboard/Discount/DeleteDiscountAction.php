<?php
namespace App\Actions\Dashboard\Discount;

use App\Actions\Dashboard\Discount\base\DiscountBaseAction;
use App\Http\Requests\Dashboard\Discount\DeleteDiscountRequest;

class DeleteDiscountAction extends DiscountBaseAction{

    public function handel(DeleteDiscountRequest $request){
        return $this->repository->delete($request->id);
    }
}
