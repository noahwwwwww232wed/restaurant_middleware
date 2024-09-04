<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MenuModel;
//hier importeren we de model in to the controller
class MenuController extends Controller
{
    //
    public function index()
    {   
        $gerechten = MenuModel::all();

        return view('menu')
        ->with('gerechten', $gerechten); 
        // return view('menu', compact('gerechten' )); 


        
    }   

    
    public function adminindex()
    {   
        $gerechten = MenuModel::all();

        return view('admin.menu')
        ->with('gerechten', $gerechten); 
    }   
}
