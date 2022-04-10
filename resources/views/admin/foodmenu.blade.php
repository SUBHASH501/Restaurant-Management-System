<x-app-layout>
</x-app-layout>
<!DOCTYPE html>
<html lang="en">
  <head>
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
        <form action="{{url('uploadfood')}}" method="post" enctype="multipart/form-data" style="margin-bottom: 10px;">
            @csrf
            <div style="margin-bottom: 5px;">
                <label for="">Title</label>
                <input style="color:blue;" type="text" name="title" placeholder="Enter Title" required>
            </div>
            <div style="margin-bottom: 5px;">
                <label for="">Price</label>
                <input style="color:blue;" type="number" name="price" placeholder="Enter Price" required>
            </div>
            <div style="margin-bottom: 5px;">
                <label for="">Image</label>
                <input type="file" name="image"  required>
            </div>
            <div style="margin-bottom: 5px;">
                <label for="">Description</label>
                <input style="color:blue;" type="text" name="description" placeholder="Enter Description" required>
            </div>

            <div>
                <input style="color:blaack" type="submit" value="Save">
            </div>
        </form>

        <div>
            <table  style="margin: 10px;" bgcolor="black">
                <tr>
                    <th style="padding: 30px;">Food Name</th>
                    <th style="padding: 30px;">Price</th>
                    <th style="padding: 30px;">Description</th>
                    <th style="padding: 30px;">Image</th>
                    <th style="padding: 30px;">Action</th>
                    <th style="padding: 30px;">Update</th>
                </tr>
                @foreach($data as $data)
                <tr align="center">
                    <td>{{$data->title}}</td>
                    <td>{{$data->price}}</td>
                    <td>{{$data->description}}</td>
                    <td><img height="200" width="200" src="/foodimage/{{$data->image}}"></img></td>
                    <td><a href="{{url('/deletemenu',$data->id)}}">Delete</a></td>
                    <td><a href="{{url('/updateview',$data->id)}}">Update</a></td>
                </tr>

                @endforeach
            </table>
        </div>
    </div>

  </div>


    <!--Navbar javascript-->
   @include("admin.adminscript")
  </body>
</html>