<?php

namespace App\Http\Controllers;


use App\Models\Comment;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ItemController extends Controller
{
    public function index(){

        $items = DB::table('items')
            ->join("thumbnails", 'items.id', '=', 'thumbnails.item_id')
            ->select("items.*", "thumbnails.source")
            ->paginate(6);

        $cart = Cart::content();

        return view('items.index', ['items' => $items, 'cart' => $cart]);
    }

    public function category($category){



        $items = DB::table('items')
            ->join("thumbnails", 'items.id', '=', 'thumbnails.item_id')
            ->select("items.*", "thumbnails.source")
            ->where("items.category_id", "=", $category)
            ->paginate(6);

        $cart = Cart::content();

        return view('items.index', ['items' => $items, 'cart' => $cart, 'category' => $category]);
    }

    public function show($id){

        $item = DB::table('items')
            ->join("thumbnails", 'items.id', '=', 'thumbnails.item_id')
            ->select("items.*", "thumbnails.source")
            ->where('items.id', '=', $id)
            ->first();

        $images = DB::table('images')
            ->select("images.*")
            ->where('images.item_id', '=', $id)
            ->get();

        $comments = DB::table('comments')
            ->join("users", 'comments.user_id', '=', 'users.id')
            ->select('users.name', 'users.avatar', 'comments.text', 'comments.id')
            ->where('item_id', '=', $id)
            ->orderBy('id', 'desc')
            ->get();

        $cart = Cart::content();

        //dd($comments);

        return view('items.show', ["item" => $item, "images" => $images, 'comments' => $comments, 'cart' => $cart]);
    }

    public function comment(Request $request){

        $data = $request->validate([
            'item_id' => ["required"],
            'message' => ["required", "string", 'min:5'],
        ]);

        //dd($data);

        \App\Models\Comment::create([
            "user_id" => Auth::id(),
            "item_id" => $data["item_id"],
            "text" => $data["message"],
        ]);

        return redirect(route('items.show', $data["item_id"]));
    }
}
