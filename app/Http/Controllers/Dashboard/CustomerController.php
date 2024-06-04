<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Customer;


class CustomerController extends Controller
{

    public function index()
    {
        //So we don't forget the Customer in green color is from a model file

        $informations = Customer::all();
        return view('dashboard.customers.index', compact('informations'));
    }

    public function create()
    {
        return view('dashboard.customers.create');
    }

    public function store(Request $request){

        $customer_name = $request->input('customer_name');

        $data = [
            'customer_name' => $customer_name,
            'email' => $request->input('email'),
            'password' =>  bcrypt($request->input('password'))
        ];
        Customer::create($data);

        session()->flash('success', 'Customer added successfully!');
        return redirect()->route('dashboard.customers');
    }

}
