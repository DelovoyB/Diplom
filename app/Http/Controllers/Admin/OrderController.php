<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Item;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders = DB::table('orders')
            ->join("users", 'orders.user_id', '=', 'users.id')
            ->select("orders.*", "users.name")
            ->orderBy('id')
            ->paginate(10);

        //dd($items);

        return view("admin.orders.index", [
            "orders" => $orders,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = DB::table('users')
            ->orderBy('id')
            ->get();

        return view("admin.orders.create", ['users' => $users]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            "user_id" => ["required"],
            "phone" => ["required", "string"],
            "address" => ["required", "string"],
            "message" => ["string", "nullable"],
            "status" => ["required", "integer"],
        ]);

        //dd($data);

        $order = Order::create($data);

        return redirect(route("admin.orders.index"));
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
        $order = DB::table('orders')
            ->where('orders.id', '=', $id )
            ->first();

        $users = DB::table('users')
            ->orderBy('id')
            ->get();

        return view("admin.orders.create", [
            "order" => $order,
            "users" => $users,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $order = Order::findOrFail($id);

        $data = $request->validate([
            "user_id" => ["required"],
            "phone" => ["required", "string"],
            "address" => ["required", "string"],
            "message" => ["string"],
            "status" => ["required", "integer"],
        ]);

        $order->update($data);

        return redirect(route("admin.orders.index"));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Order::destroy($id);

        return redirect(route("admin.orders.index"));
    }
}
