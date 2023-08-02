<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ParantController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth:sanctum', 'verified']);
    }
}
