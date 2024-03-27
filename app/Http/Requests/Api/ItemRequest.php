<?php

namespace App\Http\Requests\Api;

use App\Http\Requests\Base\BaseRequestForm;

class ItemRequest extends BaseRequestForm
{


    public function rules()
    {
        return [
            'category_id'=>"required|exists:categories,id"
        ];
    }
}
