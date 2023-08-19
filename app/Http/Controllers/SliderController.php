<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class SliderController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }   
    public function index(){
        $sliders = Slider::get();
        return view('admin.slider.index', compact('sliders'));
    }
    public function addslider(){
        return view('admin.slider.create');
    }

    public function sliderstore(Request $request){
        
        $validated = $request->validate([
            'title' => 'required|unique:sliders|min:4',
            'description' => 'required|unique:sliders|min:8',
            'image' => 'required|unique:sliders|mimes:jpg,jpeg,png',
        ]
    );

        $slider_image = $request->file('image');

        $name_gen = hexdec(uniqid());
        $img_ext = strtolower($slider_image->getClientOriginalExtension());
        $img_name = $name_gen.'.'.$img_ext;
        $up_location = 'image/sliders/';
        $last_img = $up_location.$img_name;
        $slider_image->move($up_location,$img_name);

        Slider::insert([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $last_img,
            'created_at' => Carbon::now()
        ]);
    
        return redirect()->route('sliders.index')->with('success','Slider Inserted Successfully!');
    }

    public function editslider($id){
        $update = Slider::find($id);
        return view('admin.slider.edit', compact('update'));
    }

    public function updateslider(Request $request,$id){

        $old_image = $request->old_img;
    
        $slider_image = $request->file('image');
    
        if($slider_image){
            
            $name_gen = hexdec(uniqid());
            $img_ext = strtolower($slider_image->getClientOriginalExtension());
            $img_name = $name_gen.'.'.$img_ext;
            $up_location = 'image/sliders/';
            $last_img = $up_location.$img_name;
            $slider_image->move($up_location,$img_name);
    
            unlink($old_image);
            Slider::find($id)->update([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $last_img,
            'created_at' => Carbon::now()
            ]);
        
            return redirect()->route('sliders.index')->with('success','Slider Updated Successfully!');
        }else{
            Slider::find($id)->update([
            'title' => $request->title,
            'description' => $request->description,
            'created_at' => Carbon::now()
            ]);
        
            return redirect()->route('sliders.index')->with('success','Slider Updated Successfully!');
        }
        
        }

        public function deleteslider($id){
            $image = Slider::find($id);
            $old_img = $image->image;
            unlink($old_img);
             Slider::find($id)->delete();
            return redirect()->back()->with('success','Slider Deleted Successfully!');
        
        }

}
