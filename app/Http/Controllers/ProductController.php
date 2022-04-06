<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;
use Session;
use Illuminate\Support\Facades\DB;
class ProductController extends Controller
{
    function index(){
        $data=Product::all();
        return view('product',['products'=>$data]);
    }
    function product_details($id){
        $data= Product::find($id);
        return view('details',['products'=>$data]);
    }
    function search(Request $req){
        
      $data = Product::where('name','like','%'.$req->input('query').'%')->get();
    //   return $data;
    return view('search',['products'=>$data]);
    }
    function AddToCart(Request $req){
        if($req->session()->has('user')){
            // return "Hello";
            $cart=new Cart;
            $cart->user_id=$req->session()->get('user')['id'];
            $cart->product_id=$req->product_id;
            $cart->save();
            return redirect('/login');
        }else{
            return redirect('/login');
        }
      
    }
    static function CartItem(){
        $user_Id=Session::get('user')['id'];
        return Cart::where('user_id',$user_Id)->count();
    }
    function cartList(){
        $user_Id=Session::get('user')['id'];
        $products= DB::table('carts')
        ->join('products','carts.product_id','=','products.id')
        ->where('carts.user_id',$user_Id)
        ->select('products.*','carts.id as cart_id')
        ->get();
        // $products=DB::table('carts')
        // ->join('carts.product_id','=','products.id')
        // ->where('carts.user_id',$user_Id)
        // ->select('products.*')
        // ->get();
        return view('cartlist',['products'=>$products]);
    }
    function remove_cart($id){
        Cart::destroy($id);
        return redirect('cartlist');
    }
    function orderNow(){
        $user_Id=Session::get('user')['id'];
        $totals= $products= DB::table('carts')
        ->join('products','carts.product_id','=','products.id')
        ->where('carts.user_id',$user_Id)
        ->sum('products.price');
   
        return view('ordernow',['totals'=>$totals]);
    }
    function orderPlace(Request $req){
        $user_Id=Session::get('user')['id'];
        $all_cart=Cart::where('user_id',$user_Id)->get();
        foreach($all_cart as $cart){
            $order=new Order;
            $order->product_id=$cart['product_id'];
            $order->user_id=$cart['user_id'];
            $order->status='pending';
            $order->payment_method=$req->payment;
            $order->payment_status='pending';
            $order->address=$req->address;
            $order->save();
            Cart::where('user_id',$user_Id)->delete();

        }
        $req->input();
        return redirect('/');
    }
    function myOrders(){
      
        $user_Id=Session::get('user')['id'];
        $orders = DB::table('orders')
        ->join('products','orders.product_id','=','products.id')
        ->where('orders.user_id',$user_Id)
        ->get();
        return view('myorder',['orders'=>$orders]);
    }
   
}
