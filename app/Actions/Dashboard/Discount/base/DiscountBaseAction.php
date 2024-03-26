<?php
namespace App\Actions\Dashboard\Discount\base;

use App\Repositories\DiscountRepository;

class DiscountBaseAction{



    public function __construct(protected DiscountRepository $repository) {

    }
}
