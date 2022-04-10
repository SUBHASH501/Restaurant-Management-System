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


    <div style="position: relative; top:60px;right:-150px;">
        <form action="{{url('update,$data->id')}}" method="post" enctype="multipart/form-data" style="margin-bottom: 10px;">
            @csrf
            <div style="margin-bottom: 5px;">
                <label for="">Title</label>
                <input style="color:blue;" type="text" name="title"  value="{{$data->title}}"    required>
            </div>
            <div style="margin-bottom: 5px;">
                <label for="">Price</label>
                <input style="color:blue;" type="number" name="price" value="{{$data->price}}"     required>
         </div>
            <div style="margin-bottom: 5px;">
                <label for="">Description</label>
                <input style="color:blue;" type="text" name="description" value="{{$data->description}}"     required>
            </div>
            <div style="margin-bottom: 5px;">
                <label for="">Old Image</label>
                <img height="200" width="200" src="/foodimage/{{$data->image}}">
            </div>
            <div style="margin-bottom: 5px;">
                <label for="">New Image</label>
                <input type="file" name="image"  required>
            </div>

            <div>
                <input style="color:blaack" type="submit" value="Save">
            </div>
        </form>
  </div>

    <!--Navbar javascript-->
   @include("admin.adminscript")
  </body>
</html>