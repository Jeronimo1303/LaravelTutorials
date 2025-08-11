<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ProductController extends Controller
{

    public static $products = [
        ["id" => "1", "name" => "TV", "description" => "Best TV", "price" => 100],
        ["id" => "2", "name" => "iPhone", "description" => "Best iPhone", "price" => 20],
        ["id" => "3", "name" => "Chromecast", "description" => "Best Chromecast", "price" => 200],
        ["id" => "4", "name" => "Glasses", "description" => "Best Glasses", "price" => 50]
    ];

    public function index(): View
    {
        $viewData = [];
        $viewData["title"] = "Products - Online Store";
        $viewData["subtitle"] = "List of products";
        $viewData["products"] = ProductController::$products;
        return view('product.index')->with("viewData", $viewData);

    }


    public function show(string $id)
    {
        $viewData = [];
        if ($id > sizeof(ProductController::$products)) {
            return redirect()->route('home.index');
        }
        $product = ProductController::$products[$id - 1];
        $viewData["title"] = $product["name"] . " - Product information";
        $viewData["subtitle"] = $product["name"] . " - Product information";
        $viewData["product"] = $product;
        return view('product.show')->with("viewData", $viewData);
    }

    public function create()
    {
        $viewData = []; //to be sent to the view
        $viewData['title'] = "Create Product";
        return view('product.create')->with("viewData", $viewData);
    }

    public function save(Request $request)
    {
        $viewData = []; //to be sent to the view
        $viewData['title'] = "Create Product";
        $request->validate(
            [
                "name" => "required",
                "price" => ["required", "gte:0"]
            ]
        );

        return view('product.success')->with("viewData", $viewData);
        //here will be the code to call the model and save it to the database
    }
}