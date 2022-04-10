<x-app-layout>
</x-app-layout>
<!DOCTYPE html>
<html lang="en">
  <head>
 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin Page</title>
  
    @include("admin.admincss")
  </head>
  <body>

  <div class="container-scroller">
  
    @include("admin.navbar")

    <form action="{{url('/uploadchef')}}" method="Post" enctype="multipart/form-data" style="margin: 10px">
        @csrf
        <div>
            <label for="">Name</label>
            <input type="text" style="color:blue" name="name" required placeholder="Enter Chef Name">

        </div>
        <div>
            <label for="">Speciality</label>
            <input type="text" style="color:blue" name="speciality" required placeholder="Enter Chef's Speciality">
        </div>

        <div>
            <input type="file" name="image" required>
        </div>
         <div>
             <input type="submit" style="color:blue" value="Save">
         </div>
    </form>
  <table bgcolor="black">
      <tr>
        <th style="padding: 30px;">Name</th>
        <th style="padding: 30px;" >Speciality</th>
        <th style="padding: 30px;">Image</th>
        <th style="padding: 30px;">Action</th>
        <th style="padding: 30px;">Delete</th>
      </tr>
  @foreach($data as $data)
      <tr align="center">
        <td>{{$data->name}}</td>
        <td>{{$data->speciality}}</td>
        <td><img height="300" width="300" src="/chefimage/{{$data->image}}"></td>
        <td><a href="{{url('/updatefoodchef',$data->id)}}">Update</a></td>
        <td><a href="{{url('/deletechef',$data->id)}}">Delete</a></td>
      </tr>
      @endforeach
    </table>
    </div>
    <!--Navbar javascript-->
   @include("admin.adminscript")
  </body>
</html>