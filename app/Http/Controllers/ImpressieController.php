<?php

// app/Http/Controllers/ImpressieController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImpressieController extends Controller
{
    public function show()
    {
        $images = [
            '1.jpeg', '2.jpeg', '3.jpeg', '4.jpeg',
            '5.jpeg', '6.jpeg', '7.jpeg', '8.jpeg',
            '9.jpeg', '10.jpeg', '11.jpeg', '12.jpeg',
        ];

        return view('impressie', compact('images'));
    }
}

