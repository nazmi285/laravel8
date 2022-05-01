<?php

namespace App\Http\Controllers;

use Hash;
use App\Models\Customer;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class SocialController extends Controller
{
    public function redirectToGoogle(){
    	return Socialite::driver('google')->redirect();
    } 

    public function googleCallback(){
        $user = Socialite::driver('google')->user();
        dd($user);
        $this->registerOrLoginGoogleUser($user);
    }

    public function registerOrLoginGoogleUser($guser)
    {
        try {

            $finduser = User::where('google_id', $guser->id)->first();

            if ($finduser) {

                Auth::login($finduser);

                return redirect('/home');

            } else {
                $user = User::where('email', '=', $guser->email)->first();
                if ($user === null) {
                    // user doesn't exist
                    $user = new User;
                    $user->email = $guser->email;
                    $user->password = Hash::make('Abcd@1234');
                    $user->google_id = $guser->id;
                    $user->name = $guser->name;
                    // $user->image_url = $guser->avatar;
                }else{
                    $user->google_id = $guser->id;
                    $user->save();  
                }
                

                Auth::login($user);

                return redirect('/home');
            }

        } catch (Exception $e) {
            return redirect('/')->with('danger', $e);
        }
    }

}
