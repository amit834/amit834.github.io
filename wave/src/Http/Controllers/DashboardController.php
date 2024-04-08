<?php

namespace Wave\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use TCG\Voyager\Models\Role;

class DashboardController extends Controller
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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Check user type customer
        if(!Auth::guest()){
            if(auth()->user()->role_id == 7){
                return redirect('customer/dashboard'); 
            }
            return view('theme::dashboard.index');
        }  else {
            return view('theme::dashboard.index');
        }
    }
}
