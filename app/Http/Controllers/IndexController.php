<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class IndexController extends Controller
{

    private Request $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }


    public function index()
    {


        // dd($posts);

        return view('home');
    }

    public function login()
    {

        // $query = $request->all();
        // dump($request);
        // dd($query);


        return view('auth.login');
    }

    public function register()
    {

        return view('auth.register');
    }

    public function authorization()
    {
        $user = User::whereUsername($this->request->get('username'))->first();
        if (!$user || !Hash::check($this->request->get('password'), $user->password)) {
            \Session::flash('error', 'Incorrect Login/Password');
            return redirect()->back();
        }

        \Auth::login($user);

        return to_route('home');
    }

    public function registration(Request $request)
    {
        $user = User::create([
            'username' => $this->request->get('username'),
            'password' => Hash::make($this->request->get('password'))
        ]);
        // $user->information()->create([
        //     'name'=> $request->get('name'),
        //     'birthday'=> $request->date('birthday')
        // ]);


        \Auth::login($user);
        // dd($user);
        return to_route('home');
    }

    public function logout()
    {
        \Auth::logout();
        return to_route('auth.login');
    }

    // public function profile(int $id)
    // {
    //     $user = User::find($id);
    //     dd($user -> information);
    //     return view('profile');
    // }
}
