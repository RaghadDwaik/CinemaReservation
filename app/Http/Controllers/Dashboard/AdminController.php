<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;


class AdminController extends Controller
{

    public function index()
    {
        return view ('dashboard.Layout.adminpage');
    }
    public function addUser()
    {
        return view('AdminPanel.AddUser');
    }

}