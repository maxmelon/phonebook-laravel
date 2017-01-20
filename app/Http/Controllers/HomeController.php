<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void

    public function __construct()
    {
    }
*/
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->middleware('auth');
        $username = Auth::user()->name;
        $userId = Auth::id();
        $user = User::find($userId);
        $contacts = $user->contacts;
        return view('home', compact('username', 'userId', 'contacts'));
    }

    public function start()
    {
        if (Auth::check()) {
            return redirect()->route('home');
        } else {
            return view('start');
        }
    }
}
