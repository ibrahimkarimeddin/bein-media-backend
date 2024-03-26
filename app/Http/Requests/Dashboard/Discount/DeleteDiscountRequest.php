<?php

namespace App\Http\Requests\Dashboard\Discount;

use App\Enums\DiscountTypeEnum;
use App\Http\Requests\Base\BaseRequestForm;
use Illuminate\Validation\Rule;

class DeleteDiscountRequest extends BaseRequestForm
{


    public function rules()
    {
        return [
            'id'=>'required|exists:discounts,id',

        ];
    }
}
