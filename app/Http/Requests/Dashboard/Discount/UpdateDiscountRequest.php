<?php

namespace App\Http\Requests\Dashboard\Discount;

use App\Enums\DiscountTypeEnum;
use App\Http\Requests\Base\BaseRequestForm;
use Illuminate\Validation\Rule;

class UpdateDiscountRequest extends BaseRequestForm
{


    public function rules()
    {
        return [
            'id'=>'required|exists:discounts,id',
            'type'=>[Rule::in(DiscountTypeEnum::$all)  , 'required'],
            'value'=>"required"
        ];
    }
}
