<?php

namespace App\Http\Requests\Dashboard\Item;

use App\Http\Requests\Base\BaseRequestForm;

class CreateItemRequest extends BaseRequestForm
{


    public function rules()
    {
        return [
            "name"=>"required",
            "description"=>"required",
            'price'=>"required",
            'category_id' => "required|exists:categories,id",
            'discount_id'=> "nullable|exists:discounts,id"

        ];
    }
}
