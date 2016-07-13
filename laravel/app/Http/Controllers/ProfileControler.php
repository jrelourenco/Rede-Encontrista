<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class ProfileControler extends Controller
{


    function show()
    {
        $userId = Auth::id();

        
    }
}
