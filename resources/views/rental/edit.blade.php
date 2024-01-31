@extends('layouts.app')
  
@section('contents')
    <h1 class="mb-0">Edit Rental</h1>
    <hr />
    <form action="{{ route('rentals.update', $rental->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Rental_Type</label>
                <input type="text" name="rental_type" class="form-control" placeholder="Rental_Type" value="{{ $rental->rental_type }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Customer_ID</label>
                <input type="text" name="customer_id" class="form-control" placeholder="Customer_ID" value="{{ $rental->customer_id }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Start_Date</label>
                <input type="text" name="start_date" class="form-control" placeholder="Start_Date" value="{{ $rental->start_date }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">End_Date</label>
                <input type="text" name="end_date" class="form-control" placeholder="End_Date" value="{{ $rental->end_date }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Total_Price</label>
                <input type="text" name="total_price" class="form-control" placeholder="Total_Price" value="{{ $rental->total_price }}" >
            </div>
        </div>
       
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection