@extends('layouts.app')
  
@section('contents')
    <h1 class="mb-0">Edit Cottage and Lodge</h1>
    <hr />
    <form action="{{ route('cottage.update', $cottage->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Name</label>
                <input type="text" name="name" class="form-control" placeholder="Name" value="{{ $cottage->name }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Description</label>
                <input type="text" name="description" class="form-control" placeholder="Description" value="{{ $cottage->description }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Cottage or Lodge</label>
                <input type="text" name="cottage_or_lodge" class="form-control" placeholder="Cottage or Lodge" value="{{ $cottage->cottage_or_lodge }}" >
            </div>
            <div class="col">
                <label class="form-label">Status</label>
                    <select type="text" name="status" class="form-control" placeholder="Status">
                    <option value="Available">Available</option>
                    <option value="Occupied">Occupied</option>
                    <option value="Unavaible">Unavaible</option>
                    </select>
                </div>
                </div>
            <div class="col mb-3">
                <label class="form-label">Price for Rent</label>
                <input type="text" name="price_for_rent" class="form-control" placeholder="Price for Rent" value="{{ $cottage->price_for_rent }}" >
            </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection