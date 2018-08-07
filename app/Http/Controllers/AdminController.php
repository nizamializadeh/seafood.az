<?php

namespace App\Http\Controllers;

use App\Reservation;
use App\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.admin');
    }

    /**
     *
     */
    public function users(){
        $users = User::orderBy('id', 'DESC')->get();
        return view('admin.pages.user.users', compact('users'));
    }

    public function userdelete($id){
        $user = User::find($id);
        $user->delete();
        return redirect('/admin/users');
    }

    public function reservations(){
        $reservations = Reservation::orderBy('id', 'DESC')->get();
        return view('admin.pages.reservation.reservations', compact('reservations'));
    }
}
