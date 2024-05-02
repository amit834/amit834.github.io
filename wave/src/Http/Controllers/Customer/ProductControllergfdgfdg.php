<?php

namespace Wave\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Database\Query\Builder;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Redirect;

use Wave\User;
use Wave\Listing;
use Wave\ListingItem;

class ProductController extends Controller
{
    public function dashboard(){
        return view('theme::customer.dashboard');
    }
}