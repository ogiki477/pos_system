<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Request;

class CategoryModel extends Model
{
    protected $table = 'category';

    static public  function getCategory(){

        $data = self::select('category.*');
                        if(!empty(Request::get('category_name'))){

                            $data = $data->where('category.category_name','like','%'.Request::get('category_name').'%');
                                        
                        }
                      $data = $data->orderBy('category.category_name','desc')
                              ->paginate(2);
        return $data;
    }
}
