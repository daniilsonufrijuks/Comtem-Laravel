<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

class PageController extends Controller
{
    public function home()
    {
        return Inertia::render('Home', [
            'routes' => $this->navbarRoutes()
        ]);
    }

    public function about()
    {
        return Inertia::render('Aboutus', [
            'routes' => $this->navbarRoutes()
        ]);
    }

    public function contacts()
    {
        return Inertia::render('Contacts', [
            'routes' => $this->navbarRoutes()
        ]);
    }

    public function discounts()
    {
        return Inertia::render('Discounts', [
            'routes' => $this->navbarRoutes()
        ]);
    }

    public function market()
    {
        return Inertia::render('Market', [
            'routes' => $this->navbarRoutes()
        ]);
    }

    private function navbarRoutes()
    {
        return [
            'home' => route('home'),
            'about' => route('about'),
            'contacts' => route('contacts'),
            'discounts' => route('discounts'),
            'market' => route('market')
        ];
    }
}
