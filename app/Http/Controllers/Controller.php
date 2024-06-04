<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;


    // public function index()
    // {
    //     $programming_by = config('app.programming_by');
    //     $app_name = config('app.name');

    //     return view('dashboard.index',[
    //         'programming_by' => $programming_by,
    //         'app_name' => $app_name,
    //     ]);
    // }
}
