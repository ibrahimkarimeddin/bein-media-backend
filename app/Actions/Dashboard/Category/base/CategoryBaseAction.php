<?php
namespace App\Actions\Dashboard\Category\base;

use App\Repositories\CategoryRepository;

class CategoryBaseAction{



    public function __construct(protected CategoryRepository $repository) {

    }
}
