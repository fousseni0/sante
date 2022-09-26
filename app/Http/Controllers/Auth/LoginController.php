<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

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

    public function login(Request $request)
    {

        $input = $request->all();

        $this->validate($request, [

            'email' => 'required|email',

            'password' => 'required',

        ]);


        if (auth()->attempt(array('email' => $input['email'], 'password' => $input['password']))) {

            if (auth()->user()->role == 'admin') {

                return redirect()->route('admin.home');
            } else {
                //si c'est un medecin
                if(auth()->user()->role === 'medecin'){
                    if(auth()->user()->compte == 1){
                        return redirect()->route('medecin.home');
                    }
                    abort(403, "vous ne pouvez pas accéder à cette page, veuillez contacter l'administrateur");
                } 

                //si c'est un secretaire
                if(auth()->user()->role === 'secretaire'){
                    if(auth()->user()->compte == 1){
                        return redirect()->route('secretaire.home');
                    }
                    abort(403, "vous ne pouvez pas accéder à cette page, veuillez contacter l'administrateur");
                } 

                //si c'est un patient
                if(auth()->user()->role === 'patient'){
                    return redirect()->route('home');
                } 
            }
        } else {
            return redirect()->route('login')
            ->with('error', 'Address e-mail ou mot de pass inccorects.');
        }
    }
}
