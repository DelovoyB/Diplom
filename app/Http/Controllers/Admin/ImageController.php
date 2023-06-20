<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Image;
use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $images = DB::table('images')
            ->join("items", 'images.item_id', '=', 'items.id')
            ->select("images.*", "items.title")
            ->orderBy('id')
            ->paginate(10);

        //dd($items);

        return view("admin.images.index", [
            "images" => $images,
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

        return view("admin.images.create", ['items' => $items]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            "source" => ["required", "image"],
            "item_id" => ["required"],
        ]);

        //dd($data);

        if ($request->has("source")) {
            $source = str_replace("public/items/products/","", $request->file("source")
                ->store("public/items/products"));

            //dd($source);

            $data["source"] = $source;
        }

        Image::create($data);

        return redirect(route("admin.images.index"));
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
        $image = DB::table('images')
//            ->join("items", 'images.item_id', '=', 'items.id')
//            ->select("images.*", "items.id as item_idd")
            ->where('images.id', '=', $id )
            ->first();

        $items = DB::table('items')
            ->select('items.id', 'items.title')
            ->orderBy('id')
            ->get();

        //dd($image);

        return view("admin.images.create", [
            "image" => $image,
            "items" => $items,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        //dd($request);

        $image = Image::findOrFail($id);

        $data = $request->validate([
            "source" => ["image"],
            "item_id" => ["required"],
        ]);

        //dd($data, $id);

        if ($request->has("source")) {
            $source = str_replace("public/items/products/","", $request->file("source")
                ->store("public/items/products"));
            $data["source"] = $source;
        }

        $image->update($data);

        return redirect(route("admin.images.index"));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Image::destroy($id);

        return redirect(route("admin.images.index"));
    }
}
