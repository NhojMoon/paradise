<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Rental;

class DashboardController extends Controller
{
    //
    public function showdashboard(){
        $customerCount = Customer::count(); 
        $rentalCount = Customer::count(); 
        $rental = Rental::all(); 


        return view('dashboard', compact('customerCount' ,'rentalCount','rental'));

    }

   
}
