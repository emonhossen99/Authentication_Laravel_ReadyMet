<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
   public function index(){
    $password = 123456789;
    $haspass = Hash::make($password);
    return $haspass;
   }
}
