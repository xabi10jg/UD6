<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function adminview()
    {

        $users = User::All();


        return view('admin')->with(['users'=>$users]);
    }
    public function edit($id)
    {   
       
        $users = User::find($id);
        return view('editusers',compact('users'));
    }
    public function update(Request $request, $id)
    {   
        $user = User::All();
        $users = User::find($id);
        $users->role_id = $request -> input('role_id');
        
        $users->save();

        return redirect('admin')->with(['users'=>$user]);
    
    }
}
