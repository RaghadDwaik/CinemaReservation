<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;


class DashboardController extends Controller
{
    public function index(){
        return view ('AdminPanel.AdminDashboard');

    }

    public function user(){
        $users = User::all();
        return view ('AdminPanel.ViewUser', compact('users'));

    }
}
