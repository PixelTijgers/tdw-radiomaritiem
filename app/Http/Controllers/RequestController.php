<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RequestController extends Controller
{
    /**
     * Show request page
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('request');
    }
}
