<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Setting;
use App\Timeline;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;
use Redirect;


class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'fullname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'username' => ['required', 'string', 'min:5', 'unique:timelines'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'gender' => ['required'],
            'country' => ['required'],
            'city' => ['required'],
            'birthday' => ['required'],
            'interests' => ['required'],


        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
//        Mail::send([], [], function ($message) {
//            $message->to('aptechadil@gmail.com', 'Tutorials Point')
//                ->subject('subject')
//                ->setBody('some body', 'text/html');
//        });
//        return "Basic Email Sent. Check your inbox.";

        //Create timeline record for the user
        $timeline = Timeline::create([
            'username' => $data['username'],
            'name'     => $data['fullname'],
            'type'     => 'user',
            'about'    => 'write something about yourself'
        ]);

        //Create user record
        $user = User::create([
            'email'             => $data['email'],
            'password'          => bcrypt($data['password']),
            'timeline_id'       => $timeline->id,
            'gender'            => $data['gender'],
            'verification_code' => Str::random(30),
            'remember_token'    => Str::random(10),
            'email_verified'    => null,
            'country'           => $data['country'],
            'city'           => $data['city'],
            'birthday'           => date('Y-m-d', strtotime($data['birthday'])),
            'interests'         => implode(', ', $data['interest'])
        ]);

        //saving default settings to user settings
        $user_settings = [
            'user_id'               => $user->id,
            'confirm_follow'        => Setting::get('confirm_follow'),
            'follow_privacy'        => Setting::get('follow_privacy'),
            'comment_privacy'       => Setting::get('comment_privacy'),
            'timeline_post_privacy' => Setting::get('user_timeline_post_privacy'),
            'post_privacy'          => Setting::get('post_privacy'),
            'message_privacy'       => Setting::get('user_message_privacy'), ];

//        return User::create([
//            'name' => $data['name'],
//            'email' => $data['email'],
//            'password' => Hash::make($data['password']),
//        ]);
        return redirect('/login');
    }

    public function CreateUser(Request $request)
    {
        $this->validate($request, [
            'fullname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'username' => ['required', 'string', 'min:5', 'unique:timelines'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'gender' => ['required'],
            'country' => ['required'],
            'city' => ['required'],
            'birthday' => ['required'],
            'interests' => ['required'],
        ]);

        //Create timeline record for the user
        $timeline = Timeline::create([
            'username' => $request->username,
            'name'     => $request->fullname,
            'type'     => 'user',
            'about'    => 'write something about yourself'
        ]);

        //Create user record
        $user = User::create([
            'email'             => $request->email,
            'password'          => bcrypt($request->password),
            'timeline_id'       => $timeline->id,
            'gender'            => $request->gender,
            'verification_code' => Str::random(30),
            'remember_token'    => Str::random(10),
            'email_verified'    => null,
            'country'           => $request->country,
            'city'           => $request->city,
            'birthday'           => date('Y-m-d', strtotime($request->birthday)),
            'interests'         => implode(', ', $request->interests)
        ]);

        //saving default settings to user settings
        $user_settings = [
            'user_id'               => $user->id,
            'confirm_follow'        => 'no',
            'follow_privacy'        => 'no',
            'comment_privacy'       => 'no',
            'timeline_post_privacy' => 'no',
            'post_privacy'          => 'no',
            'message_privacy'       => 'no', ];

        Mail::send('emails.welcome', ['user' => $user], function ($m) use ($user) {
            $m->from('noreply@fitrights.com', 'Fitrights');

            $m->to($user->email, $user->name)->subject('Welcome to Fitrights');
        });

        return redirect('/');
    }

    public function verifyEmail(Request $request)
    {
        $user = User::where('email', '=', $request->email)->where('verification_code', '=', $request->code)->first();
        if($user) {
            if ($user->email_verified) {
                return Redirect::to('login')
                    ->with('message',"Verified Mail.");
            } elseif ($user) {
                $user->email_verified = 1;
                $user->update();
                return Redirect::to('login')
                    ->with('message',"verified_mail_success.");
            } else {
                echo trans('messages.invalid_verification');
            }
        }
        else{
            return Redirect::to('login')
                ->with('message', trans('Email or verfication code is not valid.'));
        }
    }
}
