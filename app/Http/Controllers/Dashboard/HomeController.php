<?php

namespace App\Http\Controllers\Dashboard;

use App\Actions\Dashboard\Home\GetHomeDataAction;
use App\Enums\ResponseEnum;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function getStatics(GetHomeDataAction $getHomeDataAction){
        $data = $getHomeDataAction->handel();

        return $this->sendResponse(ResponseEnum::GET , $data);
    }
}
