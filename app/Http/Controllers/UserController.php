<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }
    public function register(Request $request)
    {
        dd($request->all());
    }

    public function login()
    {
        return "login successfully";
    }
    //
}
?>
