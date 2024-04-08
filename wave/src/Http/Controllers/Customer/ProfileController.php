<?php

namespace Wave\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Database\Query\Builder;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Wave\User;

class ProfileController extends Controller
{  
    //Function for show my account page 
    public function my_account(){
        //Auth details
        $user_id = auth()->id();
        $user_details = User::Where('id', $user_id)->first();

        return view('theme::customer.account', compact('user_details'));
    }

    //update profile email address
    public function update_profile_email(Request $request)
    {
        $user = Auth::user();
        $newEmail = $request->input('email');          
        $update_email = User::where('id', $user->id)->update([
            'email' => $newEmail
        ]);
        //check if password updated or not
        if ($update_email) {
            echo '<div class="success" style="color:green">Email updated successfully</div>';
            echo '<script> setTimeout(function () { window.location.href = "/customer/my-account"; }, 3000);</script>';
        } else {
            echo '<div class="error" style="color:red">Oops, something went wrong</div>';
        }
    }

    //update profile password
    public function update_profile_password(Request $request){
        $user = Auth::user();
        $newPassword =  $hashedPassword = Hash::make($request->password); 
        $update_password = User::where('id', $user->id)->update([
            'password' =>  $newPassword 
        ]);
        //check if password updated or not
        if ($update_password) {
            echo '<div class="success" style="color:green">Password updated successfully</div>';
            echo '<script> setTimeout(function () { window.location.href = "/customer/my-account"; }, 3000);</script>';
        } else {
            echo '<div class="error" style="color:red">Oops, something went wrong</div>';
        }
    }

   //function to insert into user table
   public function submit_profile_details(Request $request){
        $user = Auth::user();
        $name = $request->input('fname');
        $country = $request->input('country');
        $language = $request->input('language');
        $timezone = $request->input('timezone');
        $currency = $request->input('currency');
        //insert data into database table
        $post_data = User::where('id', $user->id)->update([
            'name' => $name,
            'country' => $country,
            'language' => $language,
            'time_zone' => $timezone,
            'currency' => $currency,
        ]);
        //check if data is inserted or not
        if ($post_data) {
            return back()->with('success','Profile details updated Successfully');
        } else {
            return back()->with('error','Opps Something wrong!');
        }
    }
}
