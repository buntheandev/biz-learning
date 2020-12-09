<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:20',
            'email' => 'required|email|max:200',
            'password'  => 'required|confirmed',
        ]);

        User::create([
            'name'  => $request->name,
            'email' => $request->email,
            'password'  => bcrypt($request->password)
        ]);

        return redirect()->route('user');
    }

    public function edit($id)
    {
        $user = User::find($id);

        return view('users.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|max:20',
            'email' => 'email|max:200',
        ]);

       $data = array(
            'name'  => $request->name,
            'email' => $request->email,
            'passwrod'  => bcrypt($request->password),
       );

       User::find($id)->update($data);

       return redirect()->route('user');

    }

    public function delete($id)
    {
        User::find($id)->delete();

        return redirect()->route('user');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
