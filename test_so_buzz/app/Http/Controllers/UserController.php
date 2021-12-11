<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class UserController extends Controller
{
    public function voir() {
        return view("score", [
            "scores" => User::where('id', '!=', null)->orderBy('score', 'desc')->get()
        ]);
    }

    public function inscription() {
        $attributes = request()->validate([
            "nom" => ["required" ,"string"],
            "scores" => ["required"],
        ]);
        User::create([
            "name" => $attributes["nom"],
            "score" => $attributes["scores"],
        ]);
        return redirect("score");
    }


}
