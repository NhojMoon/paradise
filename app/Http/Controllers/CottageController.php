<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use App\Models\Cottage;
 
class CottageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cottage = Cottage::orderBy('created_at', 'DESC')->get();
  
        return view('cottage.index', compact('cottage'));
    }
  
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cottage.create');
    }
  
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Cottage::create($request->all());
 
        return redirect()->route('cottage')->with('success', 'Cottage has been added successfully');
    }
  
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $cottage = Cottage::findOrFail($id);
  
        return view('cottage.show', compact('cottage'));
    }
  
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $cottage = Cottage::findOrFail($id);
  
        return view('cottage.edit', compact('cottage'));
    }
  
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $cottage = Cottage::findOrFail($id);
  
        $cottage->update($request->all());
  
        return redirect()->route('cottage')->with('success', 'Cottage has been updated successfully');
    }
  
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $cottage = Cottage::findOrFail($id);
  
        $cottage->delete();
  
        return redirect()->route('cottage')->with('success', 'Cottage has been deleted successfully');
    }
}