<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class createUserController extends Controller
{
    public function User(Request $request){

        $validatedData = $request->validate([
            'username' => ['required', 'min:3', 'max:255'],
            'email' => ['required', 'min:3', 'max:255', 'email:dns'],
            'role' => ['required'],
            'password' => ['required', 'min:3', 'max:255'],
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);

        User::create($validatedData);
        
        return redirect('/dashboard/setting')->with('success', 'Data user berhasil di buat!');
    }

    public function index(){
        return  view('dashboard.user.createUser');
    }
    public function edit(){
        return  view('dashboard.user.editUser');
    }

    public function update(Request $request, string $id){
        $validatedData = $request->validate([
            'username' => ['required', 'min:3', 'max:255'],
            'email' => ['required', 'min:3', 'max:255', 'email:dns'],
            'role' => ['required'],
            'password' => ['required', 'min:3', 'max:255'],
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);

        User::where('id', $id)->update($validatedData);
        
        return redirect('/dashboard/setting')->with('success', 'Data User berhasil diubah!');

    }

    public function delete(string $id){
        $users = User::findOrFail($id);

        $users->delete();

        return redirect('/dashboard/setting')->with('success', 'Data Berhasil Dihapus!');
    }

}
