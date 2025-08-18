<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ProductController extends Controller
{
    public function index(): View
    {
        $viewData = [];
        $viewData['title'] = 'Products - Online Store';
        $viewData['subtitle'] = 'List of products';
        $viewData['products'] = Product::all();

        return view('product.index')->with('viewData', $viewData);

    }

    public function show(string $id)
    {
        $viewData = [];
        $product = Product::findOrFail($id);

        /*if ($id > sizeof($produc)) {
            return redirect()->route('home.index');
        }*/

        [$id - 1];
        $viewData['title'] = $product['name'].' - Product information';
        $viewData['subtitle'] = $product['name'].' - Product information';
        $viewData['product'] = $product;

        return view('product.show')->with('viewData', $viewData);
    }

    public function create()
    {
        $viewData = []; // to be sent to the view
        $viewData['title'] = 'Create Product';

        return view('product.create')->with('viewData', $viewData);
    }

    public function save(Request $request)
    {
        $request->validate(
            [
                'name' => 'required',
                'price' => ['required', 'gte:0'],
            ]
        );

        // here will be the code to call the model and save it to the database
        Product::create($request->only(['name', 'price']));

        return back();
    }
}
