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
    <div style="position: relative;top:70px;right: -150px;">
       <table bgcolor="grey" border="1px">
           <tr>
               <th style="padding: 30px;">Name</th>
               <th style="padding: 30px;">Email</th>
               <th style="padding: 30px;">Phone No</th>
               <th style="padding: 30px;">Date</th>
               <th style="padding: 30px;">Time</th>
               <th style="padding: 30px;">Message</th>
           </tr>
           
           @foreach($data as $data)
           <tr align="center">
               <td>{{$data->name}}</td>
               <td>{{$data->email}}</td>
               <td>{{$data->phone}}</td>
               <td>{{$data->date}}</td>
               <td>{{$data->time}}</td>
               <td>{{$data->message}}</td>
           </tr>
           @endforeach
       </table> 
    </div>
  </div>

    <!--Navbar javascript-->
   @include("admin.adminscript")
  </body>
</html>