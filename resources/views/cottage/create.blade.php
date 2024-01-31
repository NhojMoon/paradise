@extends('layouts.app')
  
@section('contents')
    <h1 class="mb-0">Add Cottage or Lodge</h1>
    <hr />
    <form action="{{ route('cottage.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col">
            <label class="form-label">Name</label>
                <input type="text" name="name" class="form-control" placeholder="">
            </div>
            <div class="col">
            <label class="form-label">Desription</label>
                <input type="text" name="description" class="form-control" placeholder="">
            </div>
            <div class="col">
            <label class="form-label">Cottage or Lodge</label>
                <input type="text" name="cottage_or_lodge" class="form-control" placeholder="">
            </div>
            <div class="col">
                <label class="form-label">Status</label>
                    <select type="text" name="status" class="form-control" placeholder="Status">
                    <option value="Available">Available</option>
                    <option value="Occupied">Occupied</option>
                    <option value="Unavailable">Unavaible</option>
                    </select>
                </div>
            <div class="col">
                <label class="form-label">Price for Rent</label>
                <input type="text" name="price_for_rent" class="form-control" placeholder="">
            </div>
            </div>

       
        <div class="row">
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection