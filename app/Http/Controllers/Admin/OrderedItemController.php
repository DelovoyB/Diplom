<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Image;
use App\Models\Item;
use App\Models\OrderedItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderedItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ordered_items = DB::table('ordered_items')
            ->join("items", 'ordered_items.item_id', '=', 'items.id')
            ->select("ordered_items.*", "items.title")
            ->orderBy('id')
            ->paginate(10);

        //dd($ordered_items);

        return view("admin.ordered_items.index", [
            "ordered_items" => $ordered_items,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $items = DB::table('items')
            ->select('items.id', 'items.title', "items.quantity")
            ->orderBy('id')
            ->get();

        $orders = DB::table('orders')
            ->select('orders.id')
            ->orderBy('id')
            ->get();

        return view("admin.ordered_items.create", ['items' => $items, 'orders' => $orders]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            "item_id" => ["required"],
            "quantity" => ["required"],
            "order_id" => ["required"],
        ]);

        $item = DB::table('items')
            ->where('items.id', '=', $data["item_id"])
            ->first();

        $order = DB::table('orders')
            ->where('orders.id', '=', $data["order_id"])
            ->first();

        $quantity = $item->quantity - $data["quantity"];

        //dd((int)$data["quantity"] * (float)$item->price, $quantity);

        OrderedItem::create($data);

        DB::table('orders')
            ->where('orders.id', '=', $data["order_id"] )
            ->update(['total' => round($order->total + (int)$data["quantity"] * (float)$item->price, 2)]);

        DB::table('items')
            ->where('items.id', '=', $data["item_id"])
            ->update(['quantity' => $quantity]);

        return redirect(route("admin.ordered_items.index"));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $ordered_item = DB::table('ordered_items')
            ->where('ordered_items.id', '=', $id )
            ->first();

        $items = DB::table('items')
            ->select('items.id', 'items.title', 'items.quantity')
            ->orderBy('id')
            ->get();

        $orders = DB::table('orders')
            ->select('orders.id')
            ->orderBy('id')
            ->get();

        //dd($ordered_item, $items);

        return view("admin.ordered_items.create", [
            "ordered_item" => $ordered_item,
            "items" => $items,
            "orders" => $orders,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            "item_id" => ["required"],
            "quantity" => ["required"],
            "order_id" => ["required"],
        ]);

        $ordered_item = DB::table('ordered_items')
            ->join("items", 'ordered_items.item_id', '=', 'items.id')
            ->join("orders", 'ordered_items.order_id', '=', 'orders.id')
            ->select('ordered_items.*', 'items.price', 'items.quantity as item_quantity', 'orders.total')
            ->where('ordered_items.id', '=', $id)
            ->first();

        DB::table('orders')
            ->where('orders.id', '=', $ordered_item->order_id )
            ->update(['total' => round($ordered_item->total - $ordered_item->quantity * $ordered_item->price, 2)]);

        DB::table('items')
            ->where('items.id', '=', $ordered_item->item_id)
            ->update(['quantity' => $ordered_item->item_quantity + $ordered_item->quantity]);

        DB::table('ordered_items')
            ->where('ordered_items.id', '=', $id)
            ->update([
                "item_id" => $data["item_id"],
                "quantity" => $data["quantity"],
                "order_id" => $data["order_id"],
                ]);

        $ordered_item = DB::table('ordered_items')
            ->join("items", 'ordered_items.item_id', '=', 'items.id')
            ->join("orders", 'ordered_items.order_id', '=', 'orders.id')
            ->select('ordered_items.*', 'items.price', 'items.quantity as item_quantity', 'orders.total')
            ->where('ordered_items.id', '=', $id)
            ->first();

        DB::table('orders')
            ->where('orders.id', '=', $data["order_id"] )
            ->update(['total' => round($ordered_item->total + $ordered_item->quantity * $ordered_item->price, 2)]);

        DB::table('items')
            ->where('items.id', '=', $data["item_id"])
            ->update(['quantity' => $ordered_item->item_quantity - $ordered_item->quantity]);

        return redirect(route("admin.ordered_items.index"));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $ordered_item = DB::table('ordered_items')
            ->join("items", 'ordered_items.item_id', '=', 'items.id')
            ->join("orders", 'ordered_items.order_id', '=', 'orders.id')
            ->select('ordered_items.*', 'items.price', 'items.quantity as item_quantity', 'orders.total')
            ->where('ordered_items.id', '=', $id)
            ->first();

        DB::table('orders')
            ->where('orders.id', '=', $ordered_item->order_id )
            ->update(['total' => round($ordered_item->total - $ordered_item->quantity * $ordered_item->price, 2)]);

        DB::table('items')
            ->where('items.id', '=', $ordered_item->item_id)
            ->update(['quantity' => $ordered_item->item_quantity + $ordered_item->quantity]);

        OrderedItem::destroy($id);

        return redirect(route("admin.ordered_items.index"));
    }
}
