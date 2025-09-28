<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        return view('home.index');
    }

    public function about(): View
    {
        $viewData = [];
        $viewData['title'] = 'About us - Online Store';
        $viewData['subtitle'] = 'About us';
        $viewData['description'] = 'This is an About page ...';
        $viewData['author'] = 'Developed by: Jeronimo Acosta';

        return view('home.about')->with('viewData', $viewData);
    }

    public function contact(): View
    {
        $viewData = [];
        $viewData['email'] = 'FRumeras@gmail.com';
        $viewData['address'] = 'End of the worlds technically';
        $viewData['number'] = '4018751144';

        return view('home.contact')->with('viewData', $viewData);
    }
}
