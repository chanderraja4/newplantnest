<?php

namespace App\Http\Controllers;

use App\Models\Plants;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Image;

class PlantsController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }   
    public function index(){
        $categories = Category::get();
        $plants = Plants::latest()->paginate(4);
        return view('admin.plants.index', compact('plants','categories'));
    }
    public function plantaddpage(){
        $categories = Category::get();
        $plants = Plants::latest()->paginate(4);
        return view('admin.plants.create', compact('plants','categories'));
    }
    public function plantstore(Request $request){
        $validated = $request->validate([
            'plant_name' => 'required|unique:plants|min:4',
            'description' => 'required|unique:plants|min:4',
            'price' => 'required',
            'plant_image' => 'required|unique:plants|mimes:jpg,jpeg,png',
        ]
    );

    
    $plant_image = $request->file('plant_image');

    $name_gen = hexdec(uniqid()).'.'.$plant_image->getClientOriginalExtension();
    Image::make($plant_image)->resize(500,400)->save('image/plants/'.$name_gen);

    $last_img = 'image/plants/'.$name_gen;

    Plants::insert([
        'category_id' => $request->category_id,
        'plant_name' => $request->plant_name,
        'description' => $request->description,
        'price' => $request->price,
        'plant_image' => $last_img,
        'created_at' => Carbon::now()
        
    ]);

    return redirect()->route('plants.index')->with('success','Plant Inserted Successfully!');
    }

    public function editplant($id){
        $categories = Category::get();
        $update = Plants::find($id);
        return view('admin.plants.edit', compact('update','categories'));
    }

    public function updateplant(Request $request, $id){
        // dd($request->all());
        $old_image = $request->old_img;

    $plant_image = $request->file('plant_image');

    if($plant_image){

        $name_gen = hexdec(uniqid()).'.'.$plant_image->getClientOriginalExtension();
        Image::make($plant_image)->resize(300,200)->save('image/plants/'.$name_gen);
    
        $last_img = 'image/plants/'.$name_gen;

        unlink($old_image);
        Plants::find($id)->update([
        'category_id' => $request->category_id,
        'plant_name' => $request->plant_name,
        'description' => $request->description,
        'price' => $request->price,
        'plant_image' => $last_img,
        'created_at' => Carbon::now()

        ]);
    
        return redirect()->route('plants.index')->with('success','Plant Updated Successfully!');
    }else{
        Plants::find($id)->update([
            'category_id' => $request->category_id,
            'plant_name' => $request->plant_name,
            'description' => $request->description,
            'price' => $request->price,
            'created_at' => Carbon::now()
        ]);
    
        return redirect()->route('plants.index')->with('success','Plant Updated Successfully!');
    }
    
    }

    public function deleteplant($id){
        $image = Plants::find($id);
         $old_img = $image->plant_image;
         unlink($old_img);
          Plants::find($id)->delete();
         return redirect()->back()->with('success','Plant Deleted Successfully!');
     
     }
}
