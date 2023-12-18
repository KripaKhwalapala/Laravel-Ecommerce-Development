<!DOCTYPE html>
<html lang="en">
  <head>
   @include('admin.css')

    <style type="text/css">

    .title_deg
    {
        text-align: center;
        font-size: 25px;
        font-weight: bold;
        padding-bottom: 40px;

    }


    .table_deg
    {
        border: 2px solid white;
        width= 100%;
        margin: auto;
        padding-top: 50px;
        text-align: center;
   

    }

    .th_deg
    {

        background-color: sky blue;
        padding: 10px; 
    
    
    }

    .img_size
    {
        width: 100px;
        height: 100px;
    }

    .th_color
    {
        background: skyblue;
    }
    </style>

  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
      @include('admin.header')
        <!-- partial -->

        <div class="main-panel">
        <div class="content-wrapper">


        <h1 class="title_deg">All orders</h1>

        <table class="table_deg">

        <tr class="th_color">

        <th class="th_deg">Name</th>
        <th class="th_deg">Email</th>
        <th class="th_deg">Address</th>
        <th class="th_deg">Phone</th>
        <th class="th_deg">Product_title</th>
        <th class="th_deg">Quantity</th>
        <th class="th_deg">Price</th>
        <th class="th_deg">Payment Status</th>
        <th class="th_deg">Delivery Status</th>
        <th class="th_deg">Image</th>
        <th class="th_deg">Update</th>

      
        </tr>

@foreach($order as $order)

        <tr>


        <td class= "th_deg">{{$order->name}}</td>
        <td class= "th_deg">{{$order->email}}</td>
        <td>{{$order->address}}</td>
        <td>{{$order->phone}}</td>
        <td>{{$order->product_title}}</td>
        <td>{{$order->quantity}}</td>
        <td>{{$order->price}}</td>
        <td>{{$order->payment_status}}</td>
        <td>{{$order->delivery_status}}</td>
    
        <td>

        <img  class="img_size" src="/product/{{$order->image}}">

        </td>


        <td>


@if($order->delivery_status=='processing')

        <a href="{{url('delivered', $order->id)}}" onclick="return confirm('You are updating status to (delivered).')" class="btn btn-primary">Delivered</a>


@else()

<p style="color: green;">Done</p>




@endif

        </td>

        </tr>


    @endforeach

        </table>


         <!-- container-scroller -->
    <!-- plugins:js -->
   @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>