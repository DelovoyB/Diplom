<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class CartController extends Controller
{
    public function cart()
    {
        return view('cart.index');
    }

    public function checkoutSuccess()
    {
        return view('cart.success', ['orderId' => DB::table('orders')
            ->orderBy('id', 'desc')
            ->first()->id]);
    }

    public function checkout($id)
    {
        $user = DB::table('users')
            ->where('users.id', '=', $id)
            ->first();

        return view('cart.checkout', ['user' => $user]);
    }

    public function checkoutProcess(Request $request)
    {
        $data = $request->validate([
            "phone" => ["required", "string"],
            "address" => ["required", "string"],
            "message" => ["nullable", "string"],
            "total" => ["required", "string"]
        ]);

        //dd($data);

        \App\Models\Order::create([
            "user_id" => Auth::id(),
            "phone" => $data['phone'],
            "address" => $data['address'],
            "total" => (float)$data['total'],
            "message" => $data['message'],
        ]);

        foreach (Cart::content() as $item){
            //dd();
            \App\Models\OrderedItem::create([
                "item_id" => $item->id,
                "quantity" => (int)$item->qty,
                "order_id" => DB::table('orders')
                    ->orderBy('id', 'desc')
                    ->first()->id,
            ]);

            $quantity = DB::table('items')
                ->where('id', '=', $item->id)
                ->first()
                ->quantity;

            $quantity -= (int)$item->qty;

            //dd($quantity);

            DB::table('items')
                ->where('id', '=', $item->id)
                ->update(['quantity' => $quantity]);
        }

        Cart::destroy();

        return redirect(route('checkout.success'));
    }

    public function storeInCart(Request $request) {

        //dd($request);

        $item = Item::findOrFail($request->input('item_id'));

        $thumbnail = DB::table('thumbnails')
            ->select("thumbnails.source")
            ->where('item_id', '=', $request->input('item_id'))
            ->first();

        $quantity = DB::table('items')
            ->where('id', '=', $request->input('item_id'))
            ->first()
            ->quantity;

        //dd($quantity);

        Cart::add(
            [
                'id' => $item->id,
                'name' => $item->title,
                'qty' => $request->input('quantity'),
                'price' => $item->price,
                'options' => ['source' => $thumbnail->source, 'available' => $quantity]
            ]);

        return Redirect::back()->with('message','Successfully added!');
    }

    public function deleteFromCart(Request $request) {

        //dd($request);

        $rowId = Cart::content()->where('id', $request->input('item_id'))->first()->rowId;

        //dd($rowId);

        Cart::remove($rowId);

        return Redirect::back()->with('message','Successfully removed!');
    }

    public function updateCart(Request $request) {

        //dd($request);

        $item = Cart::content()->where('id', $request->input('item_id'))->first();

        //dd($item);

        $quantity = 0;

        if ($request->input('action') == '+' and $item->options->available > (int)$item->qty){
            $quantity = (int)$item->qty + 1;
        }
        else {
            $quantity = (int)$item->qty;
        }
        if ($request->input('action') == '-'){
            $quantity = (int)$item->qty - 1;
        }

        Cart::update($item->rowId, $quantity);

        return Redirect::back()->with('message','Successfully updated!');
    }
}
