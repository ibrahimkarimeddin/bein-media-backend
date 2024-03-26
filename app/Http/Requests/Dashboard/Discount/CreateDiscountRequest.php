<?php

namespace App\Http\Requests\Dashboard\Discount;

use App\Enums\DiscountTypeEnum;
use App\Http\Requests\Base\BaseRequestForm;
use Illuminate\Validation\Rule;

class CreateDiscountRequest extends BaseRequestForm
{


    public function rules()
    {
        return [
            'type'=>[Rule::in(DiscountTypeEnum::$all)  , 'required'],
            'value'=>"required"

        ];
    }
}
