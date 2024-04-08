<?php

namespace Wave\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Database\Query\Builder;
use Illuminate\Support\Facades\Auth;
use Wave\User;
class DashboardController extends Controller
{
    public function dashboard(){
        return view('theme::customer.dashboard');
    }

    public function sale_overview(){
        return view('theme::customer.sale-overview');
    }

    public function product_listing(){
        return view('theme::customer.product-listing');
    }

    public function products(){
        return view('theme::customer.products');
    }

    public function add_new_prodcut(){
        return view('theme::customer.add-new-prodcut');
    }

    public function manage_listing(){
        return view('theme::customer.manage-listing');
    }

    public function manage_rules(){
        return view('theme::customer.manage-rules');
    }

    public function product_images(){
        return view('theme::customer.product-images');
    }

    public function product_data(){
        return view('theme::customer.product-data');
    }
	
	public function account(){
        //Auth details
        $user_id = auth()->id();
        $user_details = User::Where('id', $user_id)->first();
        return view('theme::customer.account', compact('user_details'));
    }
}
