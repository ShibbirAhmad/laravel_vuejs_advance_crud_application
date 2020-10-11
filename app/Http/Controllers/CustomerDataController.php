<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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
       

       
       public function updateCustomer(Request $request, $id){

      // return $request->all();
            $customer= Customer::find($id);

            // $validator = Validator::make($request->all(),[

            //      'name' => 'required',
            //      'email' => 'required|email',
            //      'phone' => 'required',
            //      'address' => 'required',
            // ]);
                 
       
               

                $customer->name=$request->name;
                $customer->email=$request->email;
                $customer->phone=$request->phone;
                $customer->address=$request->address;

                if ($customer->save()) {
                    
                    return response()->json([

                        "success" => "OK",
                        "data"    => $customer,
                    ]);
                }





       }


       
       public function destroyCustomer($id){

            
             $customer = Customer::find($id);

             if ($customer->delete()) {
                
                    return response()->json([
                        "success"  => "OK",
                         "message"  => "one customer destroyed"
                    ]);
             }


       }


      
}
