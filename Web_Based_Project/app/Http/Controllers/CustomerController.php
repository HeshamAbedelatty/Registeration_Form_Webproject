<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Contracts\Auth\PasswordBroker;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Customer::latest()->paginate(5);

        return view('index', compact('data'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        # customer_name', 'customer_email', 'customer_phone', 'customer_image','cutomer_username','cutomer_password', 'birthdate
        $request->validate([

'customer_name'          =>  'required|string',
'cutomer_phone'          =>  'required|string|unique:customers',
'cutomer_address'        => 'required',
'cutomer_username'       =>  'required',
'cutomer_password'       => [ 'confirmed', Password::min(8)->letters()-> numbers()->mixedCase()->symbols()],
'cutomer_password_confirmation'=>'required',
'birthdate'              => 'required|date',
'customer_email'         =>  'required|email|unique:customers|email:rfc,dns',
'customer_image'         =>  'required|image|mimes:jpg,png,jpeg,gif,svg'
        ]);

        $file_name = time() . '.' . request()->customer_image->getClientOriginalExtension();
        
        request()->customer_image->move(public_path('images'), $file_name);

        $customer = new Customer();
      
        $customer->customer_name    = $request->customer_name;
        $customer->customer_email   = $request->customer_email;
        $customer->birthdate        = $request->birthdate;
        $customer->cutomer_password = $request->cutomer_password;
        $customer->cutomer_username = $request->cutomer_username;
        $customer->cutomer_address  = $request->cutomer_address;
        $customer->cutomer_phone    = $request->cutomer_phone;
        $customer->customer_image   = $file_name;

        $customer->save();

        return redirect()->route('customers.index')->with('success', 'Customer Added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
        return view('show', compact('customer'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $customer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Customer $customer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
    {
        $customer->delete();

        return redirect()->route('customers.index')->with('success', 'Customr Data deleted successfully');
 
    }
}
