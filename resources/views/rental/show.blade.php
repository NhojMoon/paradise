@extends('layouts.app')
  
@section('contents')
    <h1 class="mb-0">Rental's Detail</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Rental_Type</label>
            <input type="text" name="rental_type" class="form-control" placeholder="Rental_Type" value="{{ $rental->rental_type }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Customer_ID</label>
            <input type="text" name="customer_id" class="form-control" placeholder="Customer_ID" value="{{ $rental->customer_id }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Start_Date</label>
            <input type="text" name="start_date" class="form-control" placeholder="Start_Date" value="{{ $rental->start_date }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">End_Date</label>
            <input type="number" name="phone" class="form-control" placeholder="End_Date" value="{{ $rental->end_date }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Total_Price</label>
            <input type="text" name="total_price" class="form-control" placeholder="Total_Price" value="{{ $rental->total_price }}" readonly>
        </div>
    </div>

    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Created At</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $rental->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Updated At</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $rental->updated_at }}" readonly>
        </div>
    </div>
@endsection