<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use App\Models\Rental;
 
class RentalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rental = Rental::orderBy('created_at', 'DESC')->get();
  
        return view('rental.index', compact('rental'));
    }
  
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('rental.create');
    }
  
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Rental::create($request->all());
 
        return redirect()->route('rental')->with('success', 'Rental has been added successfully');
    }
  
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $rental = Rental::findOrFail($id);
  
        return view('rental.show', compact('rental'));
    }
  
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $rental = Rental::findOrFail($id);
  
        return view('rental.edit', compact('rental'));
    }
  
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $rental = Rental::findOrFail($id);
  
        $rental->update($request->all());
  
        return redirect()->route('rental')->with('success', 'Rental has been updated successfully');
    }
  
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $rental = Rental::findOrFail($id);
  
        $rental->delete();
  
        return redirect()->route('rental')->with('success', 'Rental has been deleted successfully');
    }
}