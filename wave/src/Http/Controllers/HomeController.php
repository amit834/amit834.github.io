<?php

namespace Wave\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use TCG\Voyager\Models\Role;

class HomeController extends Controller
{

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
            return redirect('dashboard'); 
        }  else {
            if(setting('auth.dashboard_redirect', true) != "null"){
                if(!Auth::guest()){
                    return redirect('dashboard');
                }
            }

            $seo = [

                'title'         => setting('site.title', 'Laravel Wave'),
                'description'   => setting('site.description', 'Software as a Service Starter Kit'),
                'image'         => url('/og_image.png'),
                'type'          => 'website'

            ];

            return view('theme::home', compact('seo'));
        }
    }
}
