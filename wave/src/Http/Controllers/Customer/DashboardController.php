<?php

namespace Wave\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Database\Query\Builder;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Redirect;

use Wave\User;
use Wave\Order;
use Wave\OrderItem;

class DashboardController extends Controller
{
    public function dashboard(){
        return view('theme::customer.dashboard');
    }

    public function sale_overview(){
        //Login user id
        $login_user_id = Auth::id();

        //Get order detail
        $all_orders = Order::Where('user_id', $login_user_id)->With('user_detail','buyer_detail','shipping_detail','order_items')->paginate(10);  
       
        //echo "<pre>"; print_r($all_orders); exit;
        return view('theme::customer.sale-overview',compact('all_orders'));
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
}
