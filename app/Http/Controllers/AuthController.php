<?php

namespace App\Http\Controllers;

use App\Mail\ForgotPassword;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;

class AuthController extends Controller
{
    public function showLoginForm(){
        return view('auth.login');
    }

    public function logout(){
        auth('web')->logout();
        //return Redirect::back();
        return redirect(route("home"));
    }

    public function showRegisterForm(){
        return view('auth.register');
    }

    public function showForgotForm(){
        return view('auth.forgot');
    }

    public function cabinet($id){

        if($id != Auth::id()){
            abort(404);
        }

        $user = DB::table('users')
            ->where('users.id', '=', $id)
            ->first();

        //dd($user);

        $orders = DB::table('orders')
            ->where('user_id', '=', $id)
            ->get();

        $ordered_items = DB::table('ordered_items')
            ->join("items", 'ordered_items.item_id', '=', 'items.id')
            ->join("thumbnails", 'ordered_items.item_id', '=', 'thumbnails.item_id')
            ->select("ordered_items.*", "items.title", "items.price", "thumbnails.source")
            ->get();

        //dd($orders);

        return view('auth.cabinet', ["user" => $user, 'orders' => $orders, 'ordered_items' => $ordered_items]);
    }

    public function forgot(Request $request){
        $data = $request->validate([
            "email" => ["required", "email", "string", "exists:users"],
        ]);

        $user = \App\Models\User::where(["email" => $data["email"]])->first();

        $password = uniqid();
        $user->password = bcrypt($password);
        $user->save();
        Mail::to($user)->send(new ForgotPassword($password));

        return redirect(route("home"));
    }

    public function login(Request $request){
        $data = $request->validate([
            "email" => ["required", "email", "string"],
            "password" => ["required"],
        ]);

        if (auth('web')->attempt($data)){
            return redirect(route("home"));
        }
        return redirect(route("login"))->withErrors(["email" => "Пользователь не найден, либо данные введены неверно"]);
    }

    public function register(Request $request){

        //dd($request);

        $data = $request->validate([
            "name" => ["required", "string"],
            "represents" => ["nullable", "string"],
            "email" => ["required", "email", "string", "unique:users,email"],
            "password" => ["required", "confirmed"],
        ]);

        //dd($data);

        $user = \App\Models\User::create([
            "name" => $data["name"],
            "represents" => $data["represents"],
            "email" => $data["email"],
            "password" => bcrypt($data["password"]),
        ]);

        if($user){
            auth("web")->login($user);
        }

        return redirect(route("home"));
    }
}
