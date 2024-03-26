<?php
namespace App\Actions\Dashboard\Item\base;

use App\Repositories\ItemRepository;

class ItemBaseAction{



    public function __construct(protected ItemRepository $repository) {

    }
}
