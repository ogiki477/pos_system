<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CategoryModel extends Model
{
    protected $table = 'category';

    static public  function getCategory(){

        $data = self::select('category.*')
                      ->orderBy('category.category_name','asc')
                      ->paginate(2);
        return $data;
    }
}
