<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlertController extends Controller
{
    public function showAlert()
    {
        return view('show-alert');
    }
}
