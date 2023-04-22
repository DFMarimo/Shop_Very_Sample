<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::latest()->paginate(30);
        return view('admin.users.index' , compact('users'));
    }


    public function destroy(User $user)
    {
        $user->delete();
        return redirect(route('users.index'));
    }
}
