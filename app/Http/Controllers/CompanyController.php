<?php

namespace App\Http\Controllers;

/**
 * Handles requests for the Aklat Atbp. company profile pages.
 *
 * Each method returns the corresponding Blade view
 * for the requested page.
 */
class CompanyController extends Controller
{
    public function home()
    {
        return view('pages.home');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function services()
    {
        return view('pages.services');
    }

    public function contact()
    {
        return view('pages.contact');
    }
}