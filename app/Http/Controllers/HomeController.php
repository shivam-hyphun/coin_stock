<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * This is the index function.
     * It returns the view for the home page.
     */
    public function index()
    {
        return view('frontend.pages.home');
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
