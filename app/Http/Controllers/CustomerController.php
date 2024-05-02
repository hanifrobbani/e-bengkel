<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function index(){
        return view('dashboard.customer');
    }

    public function store(){
        $customers = Customer::latest()->get();
        return view('dashboard.customer', compact('customers'));
    }
}
