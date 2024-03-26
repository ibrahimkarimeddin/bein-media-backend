<?php

namespace App\Http\Requests\Dashboard\Category;

use App\Http\Requests\Base\BaseRequestForm;

class DeleteCategoryRequest extends BaseRequestForm
{


    public function rules()
    {
        return [
            'id' => "required|exists:categories,id",

        ];
    }
}
