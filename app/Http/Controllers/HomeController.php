<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\User;

use DB;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $users=DB::table('users')->orderBy('created_at','DESC')->paginate(4);
        $user = User::where('id', Auth::id())->get();

        
        $statut = ['Aministrateur', 'Client'];
        return view('admin.home',compact('users','statut','user'));
    }
}
