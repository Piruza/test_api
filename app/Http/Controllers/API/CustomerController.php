<?php


namespace App\Http\Controllers\API;


use App\Models\ModelFile;

use JWTAuth;

use App\Models\Customer;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class CustomerController extends Controller {

    
    public function storeCustomer(Request $request){
        $validator = Validator::make($request->all(),[
            'name' => 'required|max:155',
            'lastname' => 'required|max:155',
            'phone' => 'required|unique:customers|numeric:9',
            'email' => 'required|unique:customers|email',
            'city' => 'nullable|string'
        ]);

        if($validator->fails()){
            return $this->toJson(null, 422, $validator->errors());
        }

        //Create Customer
        $customer = Customer::create([
            'name' => $request->name,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'phone' => $request->phone,
            'city' => $request->city,
        ]);

        return $this->toJson([
            'customer' => $customer,
        ], 200);
    }

    public function updateCustomer(Request $request){
        $validator = Validator::make($request->all(),[
            'name' => 'required|max:155',
            'lastname' => 'required|max:155',
            'phone' => 'required|numeric:9',
            'email' => 'required|email',
            'city' => 'nullable|string'
        ]);

        if($validator->fails()){
            return $this->toJson(null, 422, $validator->errors());
        }

        //Check Customer
        if(!$customer = Customer::where('id', $request->id)->first()){
            return $this->toJson(null, 400, ['msg' => 'Customer not found']);
        }

        //Validate Email
        if($customerExists = Customer::where('id', '!=', $request->id)->where('email', $request->email)->first()){
            return $this->toJson(null, 400, ['msg' => 'E-mail is already used']);
        }

        //Validate Phone
        if($customerExists = Customer::where('id', '!=', $request->id)->where('phone', $request->phone)->first()){
            return $this->toJson(null, 400, ['msg' => 'Phone is already used']);
        }

        $customer->update([
            'name' => $request->name,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'phone' => $request->phone,
            'city' => $request->city,
        ]);

        return $this->toJson([
            'customer' => $customer,
        ], 200);
    }

    public function getCustomers(){
        $customers = Customer::latest()->get();

        return $this->toJson([
            'customers' => $customers,
        ], 200);
    }

    public function getCustomer(Request $request){

        //Check Customer
        if(!$customer = Customer::where('id', $request->id)->first()){
            return $this->toJson(null, 400, ['msg' => 'Customer not found']);
        }

        return $this->toJson([
            'customer' => $customer,
        ], 200);
    }
   

}
