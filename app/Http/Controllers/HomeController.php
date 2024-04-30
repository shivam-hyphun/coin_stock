<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Coins;
use App\Models\Links;
use App\Models\Tags;
class HomeController extends Controller
{
    /**
     * This is the index function.
     * It returns the view for the home page.
     */
    public function index()
    {


        if (Auth::id()) {

            $usertype = Auth()->user()->usertype;
            if ($usertype == 'user'){
                return redirect('/');
            }
            if ($usertype == 'admin') {
             
                return redirect('manage_dashboard');
            }else{
                return redirect()->back();
            }

        }

        return redirect()->back();
    }

    /**
     * This is the coinDetails function.
     * It returns the view for the coin details page.
     */

    public function show()
    {
        return view('frontend.pages.home');
    }


    /**
     * This is the submitRequest function.
     * It returns the view for the submit request page.
     */

    public function submitRequest()
    {
        return view('frontend.pages.submit-request');
    }
}
