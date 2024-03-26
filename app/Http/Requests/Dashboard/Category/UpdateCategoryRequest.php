<?php

namespace App\Http\Requests\Dashboard\Category;

use App\Enums\CategoryLevelEnum;
use App\Http\Requests\Base\BaseRequestForm;
use Illuminate\Validation\Rule;

class UpdateCategoryRequest extends BaseRequestForm
{


    public function rules()
    {
        return [
            'id' => "required|exists:categories,id",
            'name' => "required",
            'parent_id' => "nullable|exists:categories,id",
            'level' => [Rule::in(CategoryLevelEnum::$all) , "required"],
            'discount_id'=> "nullable|exists:discounts,id"

        ];
    }
}
