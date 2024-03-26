<?php

namespace App\Http\Requests\Dashboard\Item;

use App\Http\Requests\Base\BaseRequestForm;

class GetOneItemRequest extends BaseRequestForm
{


    public function rules()
    {
        return [
            'id'=>"required|exists:items,id"

        ];
    }
}
