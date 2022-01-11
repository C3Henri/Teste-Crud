<?php

namespace App\Http\Controllers\Resource;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Exception;

class dashboardController extends Controller
{
    public function dashInfo(Request $request){
        $users = User::get();
        return view('dashboard')->with('users', $users);
    }
}