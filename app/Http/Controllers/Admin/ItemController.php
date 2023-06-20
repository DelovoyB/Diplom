<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = DB::table('items')
            ->join("thumbnails", 'items.id', '=', 'thumbnails.item_id')
            ->select("items.*", "thumbnails.source")
            ->orderBy('id')
            ->paginate(10);

        //dd($items);

        return view("admin.items.index", [
            "items" => $items,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = DB::table('categories')
            ->orderBy('id')
            ->get();

        return view("admin.items.create", [ "categories" => $categories ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            "title" => ["required", "string", "min:6"],
            "description" => ["required", "string", "min:20"],
            "price" => ["required"],
            "quantity" => ["required", "integer"],
            "source" => ["required", "image"],
            "category_id" => ["required", "integer"],
        ]);

        //dd($data);

        $item = Item::create($data);

        if ($request->has("source")) {
            $source = str_replace("public/items/thumbnails/","", $request->file("source")
                ->store("public/items/thumbnails"));
            $data["source"] = $source;

            //dd($data["source"]);

            $ths = DB::table('thumbnails')
                ->select("thumbnails.id")
                ->orderByDesc('id')
                ->first();
            $its = DB::table('items')
                ->select("items.id")
                ->orderByDesc('id')
                ->first();

            DB::table('thumbnails')
                ->select("thumbnails.*")
                ->updateOrInsert(
                    [
                        'source' => $data["source"],
                        'item_id' => $its->id,
                    ]);

        }

        return redirect(route("admin.items.index"));
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
        $item = DB::table('items')
            ->join("thumbnails", 'items.id', '=', 'thumbnails.item_id')
            ->select("items.*", "thumbnails.source")
            ->where('items.id', '=', $id )
            ->first();

        $categories = DB::table('categories')
            ->orderBy('id')
            ->get();

        return view("admin.items.create", [
            "item" => $item,
            "categories" => $categories,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $item = Item::findOrFail($id);

        $data = $request->validate([
            "title" => ["required", "string", "min:6"],
            "description" => ["required", "string", "min:20"],
            "price" => ["required"],
            "quantity" => ["required", "integer"],
            "source" => ["image"],
            "category_id" => ["required", "integer"],
        ]);

        //dd($data);

        if ($request->has("source")) {
            $source = str_replace("public/items/thumbnails/","", $request->file("source")
                ->store("public/items/thumbnails"));
            $data["source"] = $source;

            //dd($data["source"]);

             DB::table('thumbnails')
                ->select("thumbnails.*")
                ->where('thumbnails.item_id', '=', $id )
                ->update(['source' => $data["source"]]);

        }

        $item->update($data);

        return redirect(route("admin.items.index"));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Item::destroy($id);

        return redirect(route("admin.items.index"));
    }
}
