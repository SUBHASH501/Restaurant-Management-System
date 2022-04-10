<x-app-layout>
</x-app-layout>
<!DOCTYPE html>
<html lang="en">
  <head>
      <base href="/public">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin Page</title>
    <!--NavBar Css-->
    @include("admin.admincss")
  </head>
  <body>

  <div class="container-scroller">
    <!--NavBar Blade-->
    @include("admin.navbar")

   <form action="{{url('/updatefoodchef',$data->id)}}" method="Post" enctype="multipart/form-data">
       @csrf
           <div>
               <label for="">Chef Name</label>
               <input style="color:blue" type="text " name="name" value="{{$data->name}}">
           </div>
           <div>
               <label for="">Speciality</label>
               <input style="color:blue" type="text " name="speciality" value="{{$data->speciality}}">
           </div>
           <div>
               <label for="">Old Image</label>
               <img height="300" width="300" src="/chefimage/{{$data->image}}">
           </div>
           <div>
               <label for="">New Image</label>
               <input type="file" name="image" >
           </div>
           <div>
               <input style="color:blue" type="submit"value="Update Chef" required>
           </div>

   </form>   
    </div>
    <!--Navbar javascript-->
   @include("admin.adminscript")
  </body>
</html>