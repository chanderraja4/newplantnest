<?php

namespace App\Http\Controllers;

use App\Models\Plants;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    
    public function index(){
        $categories = Category::all();
        $plants = Plants::join('categories', 'plants.category_id' , '=', 'categories.id')
        ->select('plants.*','categories.category_name')->get();
        return view('index',['categories'=>$categories,'plants'=>$plants]);
    }
}
