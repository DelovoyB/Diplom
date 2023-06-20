<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AdminUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $admin_users = DB::table('admin_users')
            ->orderBy('id')
            ->paginate(10);

        return view("admin.admin_users.index", [
            "admin_users" => $admin_users,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.admin_users.create", []);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            "name" => ["required", "string", "min:10"],
            "email" => ["required", "email", "string", "unique:admin_users,email"],
            "password" => ["required", "min:6", "confirmed"],
            "avatar" => ["image"],
        ]);

        //dd($data);

        if ($request->has("avatar")) {
            $avatar = str_replace("public/users/admins/","", $request->file("avatar")
                ->store("public/users/admins"));
            $data["avatar"] = $avatar;

            $admin_user = AdminUser::create([
                "name" => $data["name"],
                "email" => $data["email"],
                "password" => bcrypt($data["password"]),
                "avatar" => $data["avatar"],
            ]);
        }
        else {
            $admin_user = AdminUser::create([
                "name" => $data["name"],
                "email" => $data["email"],
                "password" => bcrypt($data["password"]),
            ]);
        }

        return redirect(route("admin.admin_users.index"));
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
        $admin_user = DB::table('admin_users')
            ->where('admin_users.id', '=', $id )
            ->first();

        return view("admin.admin_users.create", [
            "admin_user" => $admin_user,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $admin_user = AdminUser::findOrFail($id);

        if($request->input('email') == $admin_user->email)
        {
            $request->request->remove('email');
        }

        $data = $request->validate([
            "name" => ["string", "min:10"],
            "email" => ["email", "string", "unique:admin_users,email"],
            "password" => ["confirmed"],
            "avatar" => ["image"],
        ]);

        $data["password"] = bcrypt($data["password"]);

        if($request->input('password') == null)
        {
            $request->request->remove('password');
        }

        if ($request->has("avatar")) {
            $source = str_replace("public/users/admins/","", $request->file("avatar")
                ->store("public/users/admins"));
            $data["avatar"] = $source;
        }

        $admin_user->update($data);

        return redirect(route("admin.admin_users.index"));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        AdminUser::destroy($id);

        return redirect(route("admin.admin_users.index"));
    }
}
