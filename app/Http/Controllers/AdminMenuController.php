<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MenuModel;

class AdminMenuController extends Controller
{
    public function index()
    {   
        $gerechten = MenuModel::select('name', 'price')->get();

        return view('admin.menu', compact('gerechten' )); 


        
    } 
}
