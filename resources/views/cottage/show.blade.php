@extends('layouts.app')
  
@section('contents')
    <h1 class="mb-0">Detail's of Cottage and Lodge</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Name</label>
            <input type="text" name="name" class="form-control" placeholder="Name" value="{{ $cottage->name }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Description</label>
            <input type="text" name="description" class="form-control" placeholder="Description" value="{{ $cottage->description }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Cottage or Lodge</label>
            <input type="text" name="cottage_or_lodge" class="form-control" placeholder="Cottage or Lodge" value="{{ $cottage->cottage_or_lodge }}" readonly>
        </div>
        <div class="col">
                <label class="form-label">Status</label>
                    <select type="text" name="status" class="form-control" placeholder="Status">
                    <option value="Available">Available</option>
                    <option value="Occupied">Occupied</option>
                    <option value="Unavaible">Unavaible</option>
                    </select>
                </div>
        <div class="col">
            <label class="form-label">Price Per Night</label>
            <input type="text" name="price_for_rent" class="form-control" placeholder="Price for Rentt" value="{{ $cottage->price_for_rent }}" readonly>
        
    </div>
    </div>
    
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Created At</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $cottage->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Updated At</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $cottage->updated_at }}" readonly>
        </div>
    </div>
@endsection