<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
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

            if ($usertype == 'user') {
                return view('frontend.pages.home');
            }else if ($usertype == 'admin') {
                $count_users = User::where('usertype', '!=', 'admin')->count();
                // dd($count_users);
                return view('backend.pages.index',compact('count_users'));
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

    public function coinDetails()
    {
        return view('frontend.pages.coin-details');
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
