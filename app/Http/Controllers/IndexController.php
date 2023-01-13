<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class IndexController extends Controller
{
    public function index()
    {
        $posts = Post::query()->orderBy('created_at', 'DESC')->limit(3)->get();

        // dd($posts);

        return view('welcome',[
            "posts" => $posts,

        ]);
    }

    public function php(Request $request)
    {

        // $query = $request->all();
        // dump($request);
        // dd($query);


        return view('test');
    }

    public function register(Request $request)
    {
        $user = User::create([
            'username'=> $request->get('username'),
            'password'=> Hash::make($request->get('password'))
        ]);
        $user->information()->create([
            'name'=> $request->get('name'),
            'birthday'=> $request->date('birthday')
        ]);

        // dd($user);
        return to_route('home');
    }

    public function profile(int $id)
    {
        $user = User::find($id);
        dd($user -> information);
        return view('profile');
    }
}
