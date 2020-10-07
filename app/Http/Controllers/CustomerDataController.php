<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Customer;

class CustomerDataController extends Controller
{
    
         

       
       public function getCustomers(){

           $customers = Customer::all();

           return response()->json([

                "success" => "OK",
                "customers" => $customers , 
           ]);


       }
      
}
