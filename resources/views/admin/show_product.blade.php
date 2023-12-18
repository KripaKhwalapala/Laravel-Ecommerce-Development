<!DOCTYPE html>
<html lang="en">
  <head>
   @include('admin.css')

   <style type="text/css">

.center
{
    margin: auto;
    width: 80%;
    border: 2px solid white;
    text-align: center;
    margin-top; 40px;
}

.font_size {
    text-align: center;
            font-size: 40px;
            padding-top: 20px;
            padding-bottom: 30px;
        }

    .img_size
    {
     width: 150px;
     height: 150px;   
    }

    .th_color
    {
        background: skyblue;
    }

    .th_deg
    {
       padding: 10px; 
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


            
        @if(session()->has('message'))

<div class="alert alert-success">

<button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
  {{session()->get('message')}}


</div>

@endif

        <h1 class="font_size">All Products</h1>

<div style="padding-left: 475px; padding-bottom: 30px;">

<form action="{{url('search')}}" method="get">

@csrf

<input type="text" style="color: black;" name="search" placeholder="Search">
<input type="submit" value="Search" class="btn btn-outline-primary">

</form>

</div>




 <table class="center">

<tr class="th_color">

<th class="th_deg">Product title</th>
<th class="th_deg">Description</th>
<th class="th_deg">Quantity</th>
<th class="th_deg">Category</th>
<th class="th_deg">Price</th>
<th class="th_deg">Image</th>

<th class="th_deg">Delete</th>
<th class="th_deg">Edit</th>

</tr>


<!-- ... (previous HTML) ... -->

@foreach($product as $product)
<tr>

<td>{{$product->title}}</td>
<td>{{$product->description}}</td>
<td>{{$product->quantity}}</td>
<td>{{$product->category}}</td>
<td>{{$product->price}}</td>


<td>

<img class="img_size" src="/product/{{$product->image}}">
</td>

<td>
    <a class="btn btn-danger" onclick="return confirm ('Are you you want to delete it?')" href="{{url('delete_product',$product->id)}}">Delete</a>
</td>
<td>
    <a class="btn btn-success" href="{{url('update_product',$product->id)}}">Edit</a>
</td>

</tr>
@endforeach

<!-- ... (rest of the HTML) ... -->


</table>

            </div>
        </div>
         <!-- container-scroller -->
    <!-- plugins:js -->
   @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>