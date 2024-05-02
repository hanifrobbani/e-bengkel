<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function showDashboard(){

        return view('dashboard');
    }
    public function showService(){
        return view('dashboard.transaksi');
    }
    public function showProduct(){
        return view('dashboard.product');
    }
    public function showCustomers(){
        return view('dashboard.customer');
    }
    public function showReport(){
        return view('dashboard.report');
    }
}
