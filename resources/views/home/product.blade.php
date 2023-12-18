<section class="product_section layout_padding">
         <div class="container">
            <div class="heading_container heading_center">
               <h2>
                  Our <span>products</span>
               </h2>

            <div>

            <form action="{{url('product_search')}}" method="GET">

            @csrf
               <input style="width:500px;"type="text" name="search" placeholder="Type here">

               <input type="submit" value="search">

            </form>

            </div>
            </div>
            @if(session()->has('message'))
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                    {{session()->get('message')}}
                </div>
            @endif

            <div class="row">

            @foreach($product as $products)
               <div class="col-sm-6 col-md-4 col-lg-4">
                  <div class="box">
                     <div class="option_container">
                        <div class="options">
                           <a href="{{url ('product_details', $products->id)}}" class="option1">
                           Product Details
                           </a>
                           
                           <form action="{{url('add_cart', $products->id)}}" method="Post">

                           @csrf
                           
                           <!-- <div class="row" > -->

                           <!-- <div class="col-md-4"> -->

                           <input type="number" name="quantity" value="1" min="1" >

                             <!-- </div> -->

                                <!-- <div class="col-md-4"> -->
                           <input type="submit" value="Add to Cart">
                           <!-- </div> -->

                           
                           <!-- </div> -->


                           </form>

                        </div>
                     </div>
                     <div class="img-box">
                        <img src="product/{{$products->image}}" alt="">
                     </div>
                     <div class="detail-box">
                        <h5>
                         {{$products->title}}
                        </h5>
                        <h6>
                           ${{$products->price}}
                        </h6>
                     </div>
                  </div>
               </div>
        
          @endforeach

          <span style="padding-top: 20px;">
           
         {!!$product->withQueryString()->links('pagination::bootstrap-5')!!}


            </span>
         </div>
      </section>