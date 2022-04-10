<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;


use App\Models\User;

use App\Models\Order;

use App\Models\Food;
use App\Models\Reservation;
use App\Models\FoodChef;

class AdminController extends Controller
{
    public function user()
    {
        $data=user::all();
        return view("admin.user",compact("data"));
    }

    public function deletemenu($id){
             $data=food::find($id);
             $data->delete();
             return redirect()->back();
    }
  
    public function deleteuser($id)
    {
        $data=user::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function foodmenu()
    {
        $data=food::all();
        return view("admin.foodmenu",compact("data"));
    }

     public function updateview($id){
         $data=food::find($id);
         return view("admin.updateview",compact("data"));
     }


    public function upload(Request $request)
    {
          $data=new food;

          $image=$request->image;

          $imagename=time().'.'.$image->getClientOriginalExtension();
          $request->image->move('foodimage',$imagename);

          $data->image=$imagename;

          $data->title=$request->title;

          $data->price=$request->price;

          $data->description=$request->description;

          $data->save();

          return redirect()->back();
    }

    public function update($id,Request $request){

          $data=food::find($id);
          $data=new food;

          $image=$request->image;

          $imagename=time().'.'.$image->getClientOriginalExtension();
          $request->image->move('foodimage',$imagename);

          $data->image=$imagename;

          $data->title=$request->title;

          $data->price=$request->price;

          $data->description=$request->description;

          $data->save();

          return redirect()->back();
    } 


    public function reservation(Request $request){

        if(Auth::id()){
            $data=new reservation;

            $data->name=$request->name;
  
            $data->email=$request->email;
  
            $data->phone=$request->phone;
  
            $data->guest=$request->guest;
  
            $data->date=$request->date;
  
            $data->time=$request->time;
  
            $data->message=$request->message;
  
            $data->save();
  
            return redirect()->back();
        }else{
            return redirect('/login');
        }

         
    } 

  public function viewreservation(){
      $data=reservation::all();
      return view("admin.adminreservation",compact("data"));
  }
    
  public function viewchef(){
      $data=FoodChef::all();

      return view("admin.adminchef",compact("data"));
  }

  public function uploadchef(Request $request){
           $data=new FoodChef();

           $image=$request->image;

           $imagename=time().'.'.$image->getClientOriginalExtension();
           $request->image->move('chefimage',$imagename);
 
           $data->image=$imagename;

           $data->name=$request->name;

           $data->speciality=$request->speciality;

           $data->save();

           return redirect()->back();

  }
  public function updatechef($id){
      $data=FoodChef::find($id);
      return view("admin.updatechef",compact("data"));
  }

  public function updatefoodchef($id,Request $request){
      $data=FoodChef::find($id);

      $image=$request->image;

      if($image){
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('chefimage',$imagename);
  
        $data->image=$imagename;
      }

      $data->name=$request->name;

      $data->speciality=$request->speciality;

       $data->save();

       return redirect()->back();
  }
   public function deletechef($id){
        $data=FoodChef::find($id);
        $data->delete();
        return redirect()->back();
   }

   public function orders(){
        $data=Order::all();
       return view('admin.orders',compact('data'));
   }
}
