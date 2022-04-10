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
    <h1>Customer Orders</h1>
    <table>
        <tr align="center">
            <td style="padding: 30px;">Name</td>
            <td style="padding: 30px;">Phone</td>
            <td style="padding: 30px;">Address></td>
            <td style="padding: 30px;">Foodname</td>
            <td style="padding: 30px;">Price</td>
            <td style="padding: 30px;">Quantity</td>
            <td style="padding: 30px;">Total Price</td>
        </tr>
        @foreach($data as $data)

        <tr align="center" style="background-color: black;">
            <td>{{$data->name}}</td>
            <td>{{$data->phone}}</td>
            <td>{{$data->address}}</td>
            <td>{{$data->foodname}}</td>
            <td>{{$data->price}}₹</td>
            <td>{{$data->quantity}}</td>
            <td>{{$data->price*$data->quantity}}₹</td>
        </tr>
        @endforeach

    </table>
  </div>

    <!--Navbar javascript-->
   @include("admin.adminscript")
  </body>
</html>