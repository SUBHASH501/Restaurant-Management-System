<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
   <table align="center" bgcolor="yellow">
       <tr>
           <th style="padding: 30px;">Food Name</th>
           <th style="padding: 30px;">Food Price</th>
           <th style="padding: 30px;">Quantity</th>
           <th style="padding: 30px;">Action</th>
       </tr>

       <form action="{{url('orderconfirm')}}" method="Post">
           @csrf
       @foreach($data as $data)
       <tr>
           <td>
               <input type="text" name="foodname[]" value="{{$data->title}}" hidden="">{{$data->title}}
            </td>
           <td>
           <input type="text" name="price[]" value="{{$data->price}}" hidden="">
           {{$data->price}}
           </td>
           <td>
           <input type="text" name="quantity[]" value="{{$data->quantity}}" hidden="">

               {{$data->quantity}}</td>
       </tr>
       @endforeach

       @foreach($data2 as $data2)
       <tr style="position: relative;top:-50px;right: -420px;">
        <td><a href="{{url('/remove',$data2->id)}}" style="background-color:red;text-decoration:none;color:black;height:20px" >Remove</a></td>
        </tr>
       @endforeach

   </table>
   <div align="center" style="padding: 10px;">
   <button class="btn btn-primary" type="button" id="order" onclick="s()">Order Now</button>
   <button class="btn btn-danger" type="button" id="close" onclick="c()">Close</button>
 </div>

 <div id="appear" align="center" style="padding: 10px;display:none;">
     <div style="padding: 10px;">
        <label for="">Name</label>
        <input type="text" name="name" placeholder="Enter Your Name">
    </div>
     <div style="padding: 10px;">
        <label for="">Phone</label>
        <input type="number" name="phone" placeholder="Enter Your Phone Number">
    </div>
     <div style="padding: 10px;">
        <label for="">Address</label>
        <input type="text" name="address" placeholder="Enter Your Address">
    </div>
    <div style="padding: 10px;">
    <input class="btn btn-success" type="submit" value="Order">
    </div>
 </div>
 </form>

 <script>
    function s(){
        document.getElementById("appear").style.display="block";   
    }

    function c(){
        document.getElementById("appear").style.display="none";   

    }
 </script>

</body>
</html>