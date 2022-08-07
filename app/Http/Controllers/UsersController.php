<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class UsersController extends Controller
{
    public function index () {
        $users = User::get();
//        $users = User::first();
//        dd($users);
        return view('users/index',compact( 'users'));
    }
    public function add () {



        return view('users/add');
    }
    public function edit ($id) {

        $user=User::find($id);

        return view('users/edit', compact('user'));


    }

    public function delete($id){
        $user = User::find($id);
        $user->delete();

        return redirect()->route('users.index');
    }

}
