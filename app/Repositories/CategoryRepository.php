<?php

namespace App\Repositories;
use App\Repositories\Base\CrudBaseRepository ;
use App\Models\Category;

class CategoryRepository extends CrudBaseRepository
 {

    public function __construct() {
        parent::__construct(new Category);

        $this->filterable = [

            "search" =>[

            ],
            "sort" => [
                'created_at' =>'desc'
            ],
            'custom'=> function($query){

                $query->select('id','name', 'parent_id', 'discount_id' , 'level');
            },


        ];
        $this->relations = ['category:id,name' , 'discount:id,type,value'];

    }
}
