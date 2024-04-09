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

    //Chnage email address
    public function update_profile_email(Request $request){
        //Login user id
        $login_user_id = Auth::id();
        
        $email = $request->email;  
        //Check if email is exit or not
        $IsEmailExits = User::where('email', $email)->exists();
        if($IsEmailExits){
            echo '<p style="color:red">Email Already Exist. Please try with new email address.</p>';
        } else {
            //Update email address
            $update_email = User::where('id', $login_user_id)->update(['email' => $email]);
            //check if email updated or not
            if ($update_email) {
                $url = url('/').'/customer/my-account';
                echo '<p style="color:green">Email Changed Successfully.</p>';
                echo '<script>setTimeout(function() { window.location.href = "' . $url . '"; }, 3000);</script>';
            } else {
                echo '<p style="color:red">Oops, something went wrong</p>';
            }
        }        
    }

    //update profile password
    public function update_profile_password(Request $request){
        $user = Auth::user();

        //Check if new password and confirm password matched
        if($request->new_password != $request->confirm_password) {
            echo '<p style="color:red">Your new password and confirm password does not matched.</p>';
        } else {
            //Check old password 
            if(!Hash::check($request->old_password, $user->password)){
                echo '<p style="color:red">Your current password does not match with the password you provided.</p>';
            } else {
                //hash password
                $newPassword = Hash::make($request->new_password); 
                $update_password = User::where('id', $user->id)->update(['password' =>  $newPassword]);
                //check if password updated or not
                if($update_password) {
                    $url = url('/').'/customer/my-account';
                    
                    echo '<p style="color:green">Password updated successfully</p>';
                    echo '<script>setTimeout(function() { window.location.href = "' . $url . '"; }, 3000);</script>';
                } else {
                    echo '<div class="error" style="color:red">Oops, something went wrong</div>';
                }
            }
        }
    }

   //Function for update user profile info
   public function submit_profile_details(Request $request){
        //Login user id
        $login_user_id = Auth::id();

        //Update login user data
        $is_update = User::where('id', $login_user_id)->update([
            'name' => $request->name,
            'country' => $request->country,
            'language' => $request->language,
            'time_zone' => $request->time_zone,
            'currency' => $request->currency,
        ]);
        //check if data is updated or not
        if ($is_update) {
            $url = url('/').'/customer/my-account';

            echo '<p style="color:green">Profile details has been updated Successfully</p>';
            echo '<script>setTimeout(function() { window.location.href = "' . $url . '"; }, 3000);</script>';
        } else {
            echo '<p style="color:green">Opps Something wrong!</p>';
        }
    }

    //Function for delete my account
   public function submit_delete_my_account(Request $request){
        //Login user id
        $login_user_id = Auth::id();

        //Update login user data
        $is_update = User::where('id', $login_user_id)->update([
            'user_status' => 'Pending',
            'ebay_token' => '', 
            'ebay_expires_in' => '', 
            'ebay_refresh_token' => '', 
            'ebay_refresh_token_expires_in' => ''
        ]);
        //check if data is updated or not
        if ($is_update) {
            $url = url('/').'/customer/my-account';

            echo '<p style="color:green">Your Account has been deleted Successfully</p>';
            echo '<script>setTimeout(function() { window.location.href = "' . $url . '"; }, 3000);</script>';
        } else {
            echo '<p style="color:green">Opps Something wrong!</p>';
        }
    }
}
