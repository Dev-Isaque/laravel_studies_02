<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function showView(): View
    {
        $data = [
            'value' => 100,
            'cities' => ['New York', 'Los Angeles', 'Chicago'],
            'names' => ['a', 'b', 'c'],
            'indice' => 1
        ];

        return view('home', $data);
    }
    public function PassandoDadosPraView(): View
    {
        // método 1
        /* 
        $data = [
            'name' => "Isaque Soares",
            'phoe' => "2298747487",
        ];
        return view('admin.newPage3', $data); 
        */

        // método 2
        /* 
        return view('admin.newPage3', [
            'name' => "Isaque Soares",
            'phone' => "2298747487",
        ]); 
        */

        // método 3
        /* 
        return view('admin.newPage3')
            ->with('name', "Isaque Soares")
            ->with('phone', "2298747487"); 
        */

        // método 4
        $name = "Isaque Soares";
        $phone = "2298747487";

        return view('admin.newPage3', compact('name', 'phone'));
    }
}
