<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mushroom;
use App\Cart;
use App\Order;
use App\Comestibilite;
use DB;
use Auth;
use PDF;
use App;
use QrCode;

use Illuminate\Support\Facades\Session;

class CardController extends Controller
{
    public function showAll(){

        $mushrooms = Mushroom::all();

        return view('cards', [
            'mushrooms' => $mushrooms,
        ]);
    }

  
    public function addToCart(){

        $id = request('id');

        $mushroom = Mushroom::where('id', $id)->first();

        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($mushroom, $mushroom->id);

        Session::put('cart', $cart);

        flash('Champignon ajouté au panier.')->success();

        return back();

    }

    public function getReduceByOne($id){
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->reduceByOne($id);

        Session::put('cart',$cart);
        
        if(count($cart->items) > 0) {
            Session::put('cart', $cart);
        }else {
            Session::forget('cart');
        }
        return redirect('my-list');
    }

    public function getAddByOne($id){
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->addByOne($id);

        Session::put('cart',$cart);
        
        if(count($cart->items) > 0) {
            Session::put('cart', $cart);
        }else {
            Session::forget('cart');
        }
        return redirect('my-list');
    }

    public function getRemoveItem($id){
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
            $cart = new Cart($oldCart);
            $cart->removeItem($id);

        if(count($cart->items) > 0) {
            Session::put('cart', $cart);
        }else {
            Session::forget('cart');
        }

       
        return redirect('my-list');
    }

    public function getList(){
        if (!Session::has('cart')){
            return view('my-list');
        }

        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);

        return view('my-list', [
            'mushrooms' => $cart->items,
        ]);
    }

    public function postCheckout() {


        if (!Session::has('cart')) {
            return redirect()->view('my-list');
        }
        
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);

        

        $order = new Order();
        $order->cart = serialize($cart);

        Auth::user()->orders()->save($order);
        
        Session::forget('cart');

        flash('Demande d\'impression envoyé.')->success();
        return redirect('/');
    }

    public function historyIndex(){
        $orders = Auth::user()->orders;
        $orders->transform(function($order, $key){
            $order->cart = unserialize($order->cart);
            return $order;
        });
        return view('history', ['orders' => $orders]);
    }

    public function print($order){
        $print = Order::where('id', $order)->first()->cart;
        $res = unserialize($print);
        foreach ($res->items as $ress) {
            $comestibleid = $ress['item']->comestible;
            $trophiqueid = $ress['item']->type_trophique;
            $ecologieid = $ress['item']->ecologie;
            $ress['item']->comestible = DB::table('Comestibilité')->where('id', $comestibleid)->first()->nom;
            $ress['item']->ecologie = DB::table('Ecologie')->where('id', $ecologieid)->first()->region;
            $ress['item']->type_trophique = DB::table('Type_Trophique')->where('id', $trophiqueid)->first()->status;
        }
        $view = view('pdf', array('res' => $res))->render();
        $pdf = resolve('dompdf.wrapper');
        $pdf->setPaper('a4', 'landscape');
        $pdf->loadHTML($view);
        $pdf->setOptions(['dpi' => 100]);
        return $pdf->stream('fiches');
    }

}
