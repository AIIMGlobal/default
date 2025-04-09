<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Socialite;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

/* included models */
use App\Models\User;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
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
        $this->middleware('guest')->except('logout');
    }

    public function loginPage()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ]);
        
        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => $validator->errors()->first(),
            ], 422);
        }
        
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $user = Auth::user();
            
            if ($user->status == 1) {
                return response()->json([
                    'success' => true,
                    'message' => 'Login successful!',
                    'redirect' => route('admin.home'),
                ]);
            } else {
                Auth::logout();
                
                return response()->json([
                    'success' => false,
                    'message' => 'Login fail. Your Account is not authorized.',
                ], 403);
            }
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Invalid email or password.',
            ], 401);
        }
    }

    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        try {
            $googleUser = Socialite::driver('google')->user();
            $user = User::where('email', $googleUser->getEmail())->first();

            if ($user) {
                if ($user->status == 1) {
                    Auth::login($user, true);

                    return redirect()->route('admin.home');
                } else {
                    return redirect()->route('login')->with('error', 'Unauthorized User Account!');
                }
            } else {
                $user = User::create([
                    'name_en'   => $googleUser->getName(),
                    'email'     => $googleUser->getEmail(),
                    'user_type' => 4,
                    'role_id'   => 4,
                    'google_id' => $googleUser->getId(),
                    'password'  => Hash::make('12345678'),
                    'status'    => 0,
                ]);

                return redirect()->route('login')->with('success', 'User registration successfull. Please wait for account approval.');
            }
        } catch (\Exception $e) {
            \Log::error($e->getMessage());

            return redirect()->route('login')->withErrors('Something went wrong');
        }
    }
}
