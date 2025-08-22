<?php

namespace App\Http\Controllers;
use App\Util\ImageLocalStorage;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ImageNotDIController extends Controller
{

    public function index()
    {
        return view('imagenotdi.index');
    }

    public function save(Request $request)
    {
        $imageStorageLocal = new ImageLocalStorage();
        $imageStorageLocal->store($request);

        return back();
    }

}