<?php

namespace App\Http\Requests\Dashboard\Category;

use App\Enums\CategoryLevelEnum;
use App\Http\Requests\Base\BaseRequestForm;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Enum;

class CreateCategoryRequest extends BaseRequestForm
{


    public function rules()
    {
        return [
            'name' => "required",
            'level' => [Rule::in(CategoryLevelEnum::$all) , "required"],
            'parent_id' => "nullable|exists:categories,id",
            'discount_id'=> "nullable|exists:discounts,id"
        ];
    }
}
