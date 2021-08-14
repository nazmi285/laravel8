<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class SocialController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function handleGoogleCallback()
    {
        try {

            $guser = Socialite::driver('google')->user();

            $finduser = User::where('google_id', $guser->id)->first();

            if ($finduser) {

                Auth::login($finduser);

                return redirect('/home');

            } else {
                // $user = new User;
                // if($guser->avatar)
                // {
                //     $url = null;

                //     $source_url = parse_url($guser->avatar);
                //     $extension = pathinfo($source_url['path'], PATHINFO_EXTENSION);

                //     $filename = $guser->id.'.'.$extension;

                //     $url = 'profiles/'.$filename;
                //     Storage::disk('profile')->put($filename, 'public');

                //     $user->image_url = $url;

                // }
                $user = User::where('email', '=', $guser->email)->first();
                if ($user === null) {
                    // dd('user not exists',$user);
                    // user doesn't exist
                    $user = new User;
                    $user->email = $guser->email;
                    $user->password = Hash::make('Abcd@1234');
                    $user->step = 1;
                    $user->status = 'New';
                    $user->google_id = $guser->id;
                    $user->name = $guser->name;
                    // $user->image_url = $guser->avatar;
                    if (!empty(session('ref_code'))) {
                        $user->ref_code = session('ref_code');
                    }
                    if ($user->save()) {
                        $merchant = Merchant::merchantNo();
                        $merchant->user_id = $user->id;
                        $merchant->save();

                        $user->syncRoles('User');

                        $user->markEmailAsVerified();

                        $sendTo = array("database");
                        event(new UserRegister($user, $sendTo));
                    }
                }else{
                    // dd('user exists',$user);
                    $user->google_id = $guser->id;
                    $user->save();  
                }
                

                Auth::login($user);

                return redirect('/home');
            }

        } catch (Exception $e) {
            // dd($e->getMessage());
            return redirect('/')->with('danger', $e);
        }
    }

    public function googleRedirect(){
    	return Socialite::driver('google')->redirect();
    } 

    public function googleCallback(){

    }
}
