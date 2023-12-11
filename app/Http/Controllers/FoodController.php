<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Food;
use App\Models\Category;
use App\Models\Location;
use App\Models\User;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class FoodController extends Controller
{
    public function yourfood(){

        $userEmail = Auth::user()->email;
        $foods = Food::where('user_email', $userEmail)->get();
        
        return view('member.yourfood', compact('foods'));
    }

    public function feedPrivate(Request $request){

        $locations = Location::all();
        $locationId = $request->input('location');
        if($locationId == null){
            $foods = Food::paginate(9);
        }else{
            $foods = Food::where('location_id', $locationId)->paginate(9);
        }
        
         
        return view('member.feedPrivate', compact('foods','locations'));
    }

    public function feed(Request $request){

        $locations = Location::all();
        $locationId = $request->input('location');
        if($locationId == null){
            $foods = Food::paginate(9);
        }else{
            $foods = Food::where('location_id', $locationId)->paginate(9);
        }
        
         
        return view('feed', compact('foods','locations'));
    }

    // public function create(){

    //     $categories = Category::all();
    //     $locations = Location::all();
    //     return view('member.create', compact('categories','locations'));
    // }



    public function imageForm()
{ 
    $categories = Category::all();
    $locations = Location::all();
    
    return view('image', compact('categories','locations'));
}


    public function store(Request $request)
    {
        $this->middleware('auth');
        $makanan = new Food;
        $makanan->food_name = $request->input('food_name');
        $makanan->category_id = $request->input('category_id');
        $makanan->location_id = $request->input('location_id');
        $makanan->best_before = $request->input('best_before');
        $makanan->food_description = $request->input('food_description');
        $makanan->user_email = Auth::user()->email;


        
        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('public/storage/image/', $filename);
            $makanan->image = $filename;
        }

        $makanan->save();

        Mail::send('emails.foodAdded', $makanan->toArray(),
        function($message){
            $message->to( Auth::user()->email, Auth::user()->name )
            ->subject('Food Added Subject');
        });

        return redirect('/member/yourfood')->with('message','Image Upload Successfully');
    }


    public function edit($id)
    {
        $makanan = Food::find($id);
        $categories = Category::all();
        $locations = Location::all();
        return view('edit',compact('makanan','categories','locations'));
    }



    public function update(Request $request, $id)
    {
        $makanan = Food::find($id);
        $makanan->food_name = $request->input('food_name');
        $makanan->category_id = $request->input('category_id');
        $makanan->location_id = $request->input('location_id');
        $makanan->best_before = $request->input('best_before');
        $makanan->food_description = $request->input('food_description');
        $makanan->user_email = Auth::user()->email;
        

        if($request->hasfile('image'))
        {
            $destination='public/storage/image/'.$makanan->image;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $file = $request->file('image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('public/storage/image/', $filename);
            $makanan->image = $filename;
        }

        $makanan->update();

        Mail::send('emails.foodUpdated', $makanan->toArray(),
        function($message){
            $message->to( Auth::user()->email, Auth::user()->name )
            ->subject('Food Updated Subject');
        });

        return redirect()->back()->with('status','Food Updated Successfully');
    }

    public function destroy($id)
    {
        $makanan = Food::find($id);
        $destination='public/storage/image/'.$makanan->image;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
        $makanan->delete();

        Mail::send('emails.foodDeleted', $makanan->toArray(),
        function($message){
            $message->to( Auth::user()->email, Auth::user()->name )
            ->subject('Food Deleted Subject');
        });

        return redirect()->back()->with('status','Food Deleted Successfully');
    }

    public function show($id){

        //$food = Food::find($id);
        $food = Food::with('user')->find($id);

        $categories = Category::all();
        $locations = Location::all();

        return view('member.single', ['food' => $food], compact('categories','locations'));


    }

    public function shownew($id){

        $food = Food::with('user')->find($id);
        // $foods = Food::all();
        $categories = Category::all();
        $locations = Location::all();
        // $locations_id =  Food::find('location_id');
        // $linkMap = "";

        // if ($locations_id=="1"){
        //    $linkMap = "https://maps.google.com/maps?q=desasiswa%20restu&t=&z=13&ie=UTF8&iwloc=&output=embed" ;
        // }
        // else if ($locations_id=="2"){
        //     $linkMap = "https://maps.google.com/maps?q=desasiswa%20tekun&t=&z=13&ie=UTF8&iwloc=&output=embed";
        // }
        // else if ($locations_id=="3"){
        //     $linkMap = "https://maps.google.com/maps?q=desasiswa%20saujana&t=&z=13&ie=UTF8&iwloc=&output=embed"; 
        // }
        // else if ($locations_id=="4"){
        //     $linkMap ="https://maps.google.com/maps?q=desasiswa%20indah%20kembara&t=&z=13&ie=UTF8&iwloc=&output=embed";
        // }
        // else if ($locations_id=="5"){
        //     $linkMap = "https://maps.google.com/maps?q=desasiswa%20fajar%20harapan&t=&z=13&ie=UTF8&iwloc=&output=embed";
        // }

        // return view('member.singlePub', ['food' => $food], compact('categories','locations','linkMap'));
        return view('member.singlePub', ['food' => $food], compact('categories','locations'));
    }


}


    
    


 
