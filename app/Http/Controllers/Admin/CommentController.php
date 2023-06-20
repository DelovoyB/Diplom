<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Image;
use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comments = DB::table('comments')
            ->join("items", 'comments.item_id', '=', 'items.id')
            ->join("users", 'comments.user_id', '=', 'users.id')
            ->select("comments.*", "items.title", "users.name")
            ->orderBy('id')
            ->paginate(10);

        //dd($comments);

        return view("admin.comments.index", [
            "comments" => $comments,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $items = DB::table('items')
            ->select('items.id', 'items.title')
            ->orderBy('id')
            ->get();

        $users = DB::table('users')
            ->select('users.id', 'users.name')
            ->orderBy('id')
            ->get();

        return view("admin.comments.create", ['items' => $items, 'users' => $users]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            "text" => ["required", "string", "min:5"],
            "user_id" => ["required"],
            "item_id" => ["required"],
        ]);

        //dd($data);

        Comment::create($data);

        return redirect(route("admin.comments.index"));
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
        $comment = DB::table('comments')
            ->join("items", 'comments.item_id', '=', 'items.id')
            ->join("users", 'comments.user_id', '=', 'users.id')
            ->select("comments.*", "items.title", "users.name")
            ->where('comments.id', '=', $id )
            ->first();

        $items = DB::table('items')
            ->select('items.id', 'items.title')
            ->orderBy('id')
            ->get();

        $users = DB::table('users')
            ->select('users.id', 'users.name')
            ->orderBy('id')
            ->get();

        //dd($comment);

        return view("admin.comments.create", [
            "comment" => $comment,
            "items" => $items,
            "users" => $users,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $comment = Comment::findOrFail($id);

        $data = $request->validate([
            "text" => ["required", "string", "min:5"],
            "user_id" => ["required"],
            "item_id" => ["required"],
        ]);

        //dd($comment, $data);

        $comment->update($data);

        return redirect(route("admin.comments.index"));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Comment::destroy($id);

        return redirect(route("admin.comments.index"));
    }
}
