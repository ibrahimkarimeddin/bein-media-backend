<?php

namespace App\Repositories;
use App\Repositories\Base\CrudBaseRepository ;
use App\Models\Item;

class ItemRepository extends CrudBaseRepository
 {

    public function __construct() {
        parent::__construct(new Item);

        $this->filterable = [

            "search" =>[
                'name'=>"string"
            ],
            "sort" => [
                'created_at' =>'desc'
            ],
            'custom'=> function($query){
                // $query->select('id');
            },


        ];
        $this->relations = ['category:id,name', 'discount:id,value,type'];

    }
}
