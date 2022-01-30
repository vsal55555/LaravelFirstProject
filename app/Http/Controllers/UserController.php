<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;


class UserController extends Controller 
{
    function viewLoad() {
        //$data = ['anil', 'peter', 'locky', 'bruce'];
        return view('users', ['user'=> "samee"]);
    }
}