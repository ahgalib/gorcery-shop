<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index(){
        $category = Category::with('sub_category.product')->get();

        $category = Category::with([
            'sub_category' => function($query){
                $query->select(['id', 'category_id', 'name', 'image']);
            },
            'sub_category.product' => function($query){
                $query->select('id', 'sub_category_id', 'name', 'title', 'weight', 'old_price', 'new_price', 'stock', 'image', 'status');
            }
        ])->select('id','name')->get();
       // $relation_ship =  $category->sub_category()->product()->get();
        echo "<pre>";print_r(json_decode($category));die;
    }
}
