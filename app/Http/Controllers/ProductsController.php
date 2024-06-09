<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
        $title = 'Le Linh Tien';
        // return view('products.index', compact('title'));
        $name = 'Tien';
        // return view('products.index')->with('name', $name);
        //send an associative array
        $myphone = [
            'name' => 'ip16',
            'year' => 2024,
            'isFavorited' => true,
        ];
        // return view('products.index', compact('myphone'));
        // send directly
        return view('products.index', [
            'myphone' => $myphone
        ]);
    }
    public function about()
    {
        return 'This is about page';
    }
    public function detail($id)
    {
        return 'This is detail page = ' . $id;
    }
}
