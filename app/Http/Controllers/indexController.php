<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class indexController extends Controller
{
    public function index()
    {

        return inertia("index");
    }


    public function show()
    {
        return inertia("show");

    }

}
