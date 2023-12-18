<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;
use App\Models\Category;

use Session;
use Stripe;

class HomeController extends Controller
{

    public function index()
    {
        $product = Product::paginate(10);
       
        return view('home.userpage',compact('product'));
    }
    public function redirect()
    {
        $usertype=Auth::user()->usertype;

        if ($usertype=='1')
        {

        $total_product=product::all()->count();
        $total_category=Category::all()->count();
        $total_user=user::all()->count();
        $product=product::all();
        
        $total_quantity=0;

        foreach($product as $product)

{
$total_quantity=$total_quantity + $product->quantity;

}

            return view('admin.home', compact('total_product','total_category','total_user','total_quantity'));
        }

        else
        {
            $product = Product::paginate(10);
       
            return view('home.userpage',compact('product'));
    
        }
    }

public function product_details($id)
{

    $product = product::find($id);
   return view('home.product_details', compact('product'));
}


public function add_cart(Request $request,$id)

{

    if(Auth::id())
    {
       $user=Auth::user();
       $userid=$user->id;
      $product = product::find($id);

        $product_exit_id=cart::where('Product_id','=',$id)->where('user_id', '=',$userid)->get('id')->first();


        if($product_exit_id)
        {
            $cart=cart::find($product_exit_id)->first();

            $quantity=$cart->quantity;
            $cart->quantity=$quantity+$request->quantity;

            $cart->price=$product->price * $cart->quantity;


            $cart->save();
     

            // return redirect()->back();
            return redirect()->back()->with('message','Added to cart successfully');
    
        }

        else

        {

            $cart= new cart();
            $cart->name=$user->name;
            $cart->email=$user->email;
            $cart->phone=$user->phone;
            $cart->address=$user->address;
            $cart->user_id=$user->id;
      
            $cart->product_title=$product->title;
            $cart->price=$product->price * $request->quantity;
            $cart->image=$product->image;
      
            $cart->Product_id=$product->id;
      
            $cart->quantity=$request->quantity;
              $cart->save();
           
      
              // return redirect()->back();
      
        
        
        
              return redirect()->back()->with('message','Added to cart successfully');
        }

    }

    else
    {
        return redirect('login');
    }
}

public function show_cart()
{

if(Auth::id())
{
    $id=Auth::user()->id;
    $cart=cart::where('user_id','=',$id)->get();
    return view('home.showcart', compact('cart'));

}

else
{
    return redirect('login');
}

}


public function remove_cart($id)
{
    $cart=cart::find($id);

    $cart->delete();

    return redirect()->back();
}


public function cash_order()
{

    $user=Auth::user();
    $userid=$user->id;
    $data=cart::where('user_id','=',$userid)->get();
   
    foreach($data as $data)
    {
        $order=new order();
        $order->name=$data->name;

        $order->email=$data->email;

        $order->address=$data->address;

        $order->phone=$data->phone;

        $order->user_id=$data->user_id;


        $order->product_title=$data->product_title;

        $order->price=$data->price;

        $order->quantity=$data->quantity;

        $order->image=$data->image;

        $order->Product_id=$data->Product_id;

        $order->payment_status='cash on delivery';

        $order->delivery_status='processing';

        $order->save();

        $cart_id=$data->id;
        $cart=cart::find($cart_id);
        $cart->delete();


    }

    return redirect()->back()->with('message','Thank you so much for your order');
   
}

public function stripe($totalprice)
{
    return view('home.stripe',compact('totalprice'));
}


public function stripePost(Request $request, $totalprice)
    {


      
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
    
        Stripe\Charge::create ([
                "amount" => $totalprice * 100, //because in stripe price is by default in cents. so 100 cents= $1
                "currency" => "usd",
                "source" => $request->stripeToken,
                "description" => "Thank you for payment." 
        ]);

        $user=Auth::user();
        $userid=$user->id;
        $data=cart::where('user_id','=',$userid)->get();
       
        foreach($data as $data)
        {
            $order=new order();
            $order->name=$data->name;
    
            $order->email=$data->email;
    
            $order->address=$data->address;
    
            $order->phone=$data->phone;
    
            $order->user_id=$data->user_id;
    
    
            $order->product_title=$data->product_title;
    
            $order->price=$data->price;
    
            $order->quantity=$data->quantity;
    
            $order->image=$data->image;
    
            $order->Product_id=$data->Product_id;
    
            $order->payment_status='Paid using cards';
    
            $order->delivery_status='processing';
    
            $order->save();
    
            $cart_id=$data->id;
            $cart=cart::find($cart_id);
            $cart->delete();
    
    
        }
      
        Session::flash('success', 'Payment successful!');
              
        return back();
    }


public function product_search(Request $request)
{
   $search_text=$request->search; 
$product=product::where('title','LIKE', "%$search_text%")->orWhere('category','LIKE', "$search_text")->paginate(10);

return view('home.userpage',compact('product'));


}

public function product()
{

    $product = Product::paginate(10);

    return view('home.all_product', compact('product'));
}


public function search_product(Request $request)
{
   $search_text=$request->search; 
$product=product::where('title','LIKE', "%$search_text%")->orWhere('category','LIKE', "$search_text")->paginate(10);

return view('home.all_product',compact('product'));


}


public function ourstory(Request $request)
{

return view('home.ourstory');


}

public function contactinfo(Request $request)
{

return view('home.contactinfo');


}



}
