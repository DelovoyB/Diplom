<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Item;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = DB::table('users')
            ->orderBy('id')
            ->paginate(10);

        return view("admin.users.index", [
            "users" => $users,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.users.create", []);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            "name" => ["required", "string", "min:10"],
            "represents" => ["nullable", "string"],
            "email" => ["required", "email", "string", "unique:users,email"],
            "password" => ["required", "min:6", "confirmed"],
            "avatar" => ["image"],
        ]);

        //dd($data);

        if ($request->has("avatar")) {
            $avatar = str_replace("public/users/","", $request->file("avatar")
                ->store("public/users"));
            $data["avatar"] = $avatar;

            $user = User::create([
                "name" => $data["name"],
                "represents" => $data["represents"],
                "email" => $data["email"],
                "password" => bcrypt($data["password"]),
                "avatar" => $data["avatar"],
            ]);
        }
        else {
            $user = User::create([
                "name" => $data["name"],
                "represents" => $data["represents"],
                "email" => $data["email"],
                "password" => bcrypt($data["password"]),
            ]);
        }


        //dd($user);

        return redirect(route("admin.users.index"));
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
        $user = DB::table('users')
            ->where('users.id', '=', $id )
            ->first();

        return view("admin.users.create", [
            "user" => $user,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = User::findOrFail($id);

        if($request->input('email') == $user->email)
        {
            $request->request->remove('email');
        }

        $data = $request->validate([
            "name" => ["string", "min:10"],
            "represents" => ["nullable", "string"],
            "email" => ["email", "string", "unique:users,email"],
            "password" => ["confirmed"],
            "avatar" => ["image"],
        ]);

        $data["password"] = bcrypt($data["password"]);

        if($request->input('password') == null)
        {
            $request->request->remove('password');
        }

        if ($request->has("avatar")) {
            $source = str_replace("public/users/","", $request->file("avatar")
                ->store("public/users"));
            $data["avatar"] = $source;
        }

        $user->update($data);

        return redirect(route("admin.users.index"));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        User::destroy($id);

        return redirect(route("admin.users.index"));
    }
}
