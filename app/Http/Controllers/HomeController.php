<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class HomeController extends Controller
{
    function index()
    {
        Alert::alert('Title', 'Message', 'Type');
        $pageTitle = 'Home';
        return view('home', ['pageTitle' => $pageTitle]);
    }
}
