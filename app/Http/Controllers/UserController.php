<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\User;


class UserController extends Controller
{

    //Login page
    public function login(){



      $users = DB::table('laravel')->get();

      foreach ($users as $user) {
          echo $user->name;
      }

      return view('login.auth', ['user' => $users]);

//      $query = User::query();
        // All
        //$users = $query->get();
        //
//      $users = $query->orderBy('id','user_id')->paginate(10);

//      return view('login.auth');
    }

}
