<?php

namespace App\Http\Controllers;

use App\Models\Asset;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //
    public function index(Request $request)
    {
        $users = User::with('role')->get();
        // dd($users);
        return view('lantikan.index', compact('users'));
    }

    public function create()
    {
       
    }

    public function store() 
    {

    }

    public function edit($id)
    {
        $user = User::find($id);
        // dd($user);
        return view('lantikan.edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        $user->name = $request->name;
        $user->email = $request->email;
        $user->role_id = $request->role_id;
        $user->created_at = $request->created_at;

        // Check if password is provided
        // if ($request->has('password')) {
        //     $user->password = Hash::make($request->password);
        // }

        $user->save();
        alert()->success('Berjaya', 'Data telah disimpan');

        return redirect('/pengurusan_pengguna/lantikan_index');

    }

    public function delete()
    {

    }

    public function lantikan_index(Request $request)
    {

    }
}
