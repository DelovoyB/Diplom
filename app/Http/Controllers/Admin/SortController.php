<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ContactFormRequest;
use App\Mail\ContactForm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class SortController extends Controller
{
    public function items_sort($column, $direction)
    {
        //dd($column, $direction);

        $items = DB::table('items')
            ->join("thumbnails", 'items.id', '=', 'thumbnails.item_id')
            ->select("items.*", "thumbnails.source")
            ->orderBy($column, $direction)
            ->paginate(10);

        //dd($items);

        return view("admin.items.index", [
            "items" => $items,
            "direction" => $direction,
            "column" => $column
        ]);
    }

    public function images_sort($column, $direction)
    {
        $images = DB::table('images')
            ->join("items", 'images.item_id', '=', 'items.id')
            ->select("images.*", "items.title")
            ->orderBy($column, $direction)
            ->paginate(10);

        //dd($items);

        return view("admin.images.index", [
            "images" => $images,
            "direction" => $direction,
            "column" => $column
        ]);
    }

    public function users_sort($column, $direction)
    {
        $users = DB::table('users')
            ->orderBy($column, $direction)
            ->paginate(10);

        return view("admin.users.index", [
            "users" => $users,
            "direction" => $direction,
            "column" => $column
        ]);
    }

    public function orders_sort($column, $direction)
    {
        $orders = DB::table('orders')
            ->join("users", 'orders.user_id', '=', 'users.id')
            ->select("orders.*", "users.name")
            ->orderBy($column, $direction)
            ->paginate(10);

        //dd($items);

        return view("admin.orders.index", [
            "orders" => $orders,
            "direction" => $direction,
            "column" => $column
        ]);
    }

    public function ordered_items_sort($column, $direction)
    {
        $ordered_items = DB::table('ordered_items')
            ->join("items", 'ordered_items.item_id', '=', 'items.id')
            ->select("ordered_items.*", "items.title")
            ->orderBy($column, $direction)
            ->paginate(10);

        //dd($ordered_items);

        return view("admin.ordered_items.index", [
            "ordered_items" => $ordered_items,
            "direction" => $direction,
            "column" => $column
        ]);
    }

    public function comments_sort($column, $direction)
    {
        $comments = DB::table('comments')
            ->join("items", 'comments.item_id', '=', 'items.id')
            ->join("users", 'comments.user_id', '=', 'users.id')
            ->select("comments.*", "items.title", "users.name")
            ->orderBy($column, $direction)
            ->paginate(10);

        //dd($comments);

        return view("admin.comments.index", [
            "comments" => $comments,
            "direction" => $direction,
            "column" => $column
        ]);
    }

    public function admin_users_sort($column, $direction)
    {
        $admin_users = DB::table('admin_users')
            ->orderBy($column, $direction)
            ->paginate(10);

        return view("admin.admin_users.index", [
            "admin_users" => $admin_users,
            "direction" => $direction,
            "column" => $column
        ]);
    }
}
