<?php

namespace Laraprego\Http\Controllers;

use Illuminate\Http\Request;

use Laraprego\Http\Requests;
use Laraprego\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * Displays the index page of the app
     *
     * @return Response
     */
    public function index()
    {
        return view('index');
    }
}