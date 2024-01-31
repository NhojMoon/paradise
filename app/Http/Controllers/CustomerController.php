<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use App\Models\Customer;
 
class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $customer = Customer::orderBy('created_at', 'DESC')->get();
  
        return view('customer.index', compact('customer'));
    }
  
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('customer.create');
    }
  
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Customer::create($request->all());
 
        return redirect()->route('customer')->with('success', 'Customer has added successfully');
    }
  
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $customer = Customer::findOrFail($id);
  
        return view('customer.show', compact('customer'));
    }
  
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $customer = Customer::findOrFail($id);
  
        return view('customer.edit', compact('customer'));
    }
  
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $customer = Customer::findOrFail($id);
  
        $customer->update($request->all());
  
        return redirect()->route('customer')->with('success', 'Customer has been updated successfully');
    }
  
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $customer = Customer::findOrFail($id);
  
        $customer->delete();
  
        return redirect()->route('customer')->with('success', 'Customer has been deleted successfully');
    }
}