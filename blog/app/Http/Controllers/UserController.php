<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class UserController extends BaseController
{
   public function userLogin($loginMessage) {
        $userCheck = DB::table('one_printuser')->where(['user_name' => $$loginMessage.username]);
        $passwordCheck = DB::table('one_printuser')->where(['user_password' => $$loginMessage.password]);

        
   }
}
