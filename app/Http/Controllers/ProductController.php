<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\product;
use App\Models\card;
use App\Models\order;
use App\Models\user;

use Illuminate\Support\Facades\DB;
use Session;
class ProductController extends Controller
{
    function index(){
        $data=product::all();
        return view('product',['products'=>$data]);
    }
    function detail($id){
        $data= product::find($id);
        return view('detail',['product'=>$data]);
    }
    function AddToCard(Request $req){
        if($req->session()->has('user')){
            $card=new card;
            $card->user_id=$req->session()->get('user')['id'];
            $card->product_id=$req->product_id;
            $card->save();
            return redirect('/');
        }
        else{
            return redirect('/login');
        }
    }
      static function cardItem(){
         $userId=Session()->get('user')['id'];
         
         $data=card::where('user_id',$userId)->count();
         return $data;
     }
     function cardList(){
        $userId=Session()->get('user')['id'];
         $data=DB::table('card')->join('products','card.product_id','=','products.id')
         ->where('card.user_id','=',$userId)->select('*','card.id as card_id')->get();
         return view('cardList',['products'=>$data]);
     }
     function remove($id){
         card::destroy($id);
         return redirect('cardList');
     }
     function orderNow(){
        $userId=Session()->get('user')['id'];
        $total=DB::table('card')->join('products','card.product_id','=','products.id')
        ->where('card.user_id','=',$userId)->select('*','card.id as card_id')->sum('products.price');
        return view('ordernow',['total'=>$total]);
     }
     function orderPlace(Request $req){
        $userId=Session()->get('user')['id'];
        $allCard= card::where('user_id',$userId)->get();
        foreach($allCard as $card){
           $order= new order;
           $order->product_id=$card['product_id'];
           $order->user_id=$card['user_id'];
           $order->status="pending";
           $order->payment_method=$req->input('payment');
           $order->payment_status="pending";
           $order->address=$req->input('address');
           $order->save();
           card::where('user_id',$userId)->delete();

        }

       
         return redirect('/');
     }
     function myOrder(){
        
        $userId=Session()->get('user')['id'];
        $orders= DB::table('orders')->join('products','orders.product_id','=','products.id')
        ->where('orders.user_id','=',$userId)->get();

    return view('myorder',['orders'=>$orders]);
     }
     function register(Request $a){
         
        $ab=new user;
        $ab->name=$a->name;
        $ab->email=$a->email;
        $ab->password=hash::make($a->password);
        $ab->save();
        return redirect('/login');

    
     }
}
