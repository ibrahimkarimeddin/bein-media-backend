<?php

namespace App\Repositories;
use App\Repositories\Base\CrudBaseRepository ;
use App\Models\Discount;

class DiscountRepository extends CrudBaseRepository
 {

    public function __construct() {
        parent::__construct(new Discount);

        $this->filterable = [

            "search" =>[

            ],
            "sort" => [
                'created_at' =>'desc'
            ],
            'custom'=> function($query){
                $query->select('id' , 'type' , 'value');
            },


        ];
        $this->relations = [];

    }
}
