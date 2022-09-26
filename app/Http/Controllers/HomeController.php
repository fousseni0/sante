<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (auth()->user()->role == "patient") {
            return view('home');
        }
        abort(403, "vous ne pouvez pas accéder à cette page, veuillez contacter l'administrateur");
    }

    public function medecinDashboard()
    {
        return view('medecin.dashbord');
    }

    public function adminDashboard()
    {
        return view('admin.dashbord');
    }

    public function secretaireDashboard()
    {
        return view('secretaire.dashbord');
    }

    //methode des test pour med
    public function testmed()
    {
        return view('medecin.test');
    }

}
