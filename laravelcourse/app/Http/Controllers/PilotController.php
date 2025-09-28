<?php

namespace App\Http\Controllers;

use App\Models\Pilot;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PilotController extends Controller
{
    public function index(): View
    {
        return view('pilot.index');
    }

    public function register(): View
    {
        $viewData = [];
        $viewData['title'] = 'Register Pilot';

        return view('pilot.register')->with('viewData', $viewData);
    }

    public function save(Request $request): RedirectResponse
    {
        Pilot::validate($request);
        Pilot::create($request->only(['name', 'city_of_origin', 'nitro_level']));

        return back();
    }

    public function list(): View
    {
        $viewData = [];
        $viewData['title'] = 'Pilots - Pilot App';
        $viewData['subtitle'] = 'List of pilots';
        $viewData['pilots'] = Pilot::orderBy('nitro_level')->get();

        return view('pilot.list')->with('viewData', $viewData);
    }

    public function statistics(): View
    {
        $viewData['title'] = 'Pilots - Pilot App';
        $viewData['subtitle'] = 'Pilot Statistics';
        $viewData['pilots_in_LA'] = Pilot::where('city_of_origin', '=', 'LA')->count();
        $viewData['pilots_in_Tokio'] = Pilot::where('city_of_origin', '=', 'Tokio')->count();
        $viewData['average_nitro_level'] = Pilot::avg('nitro_level');

        return view('pilot.statistics')->with('viewData', $viewData);
    }
}
