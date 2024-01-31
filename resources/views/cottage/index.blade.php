@extends('layouts.app')
  
@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">List of Cottages & Lodge</h1>
        <a href="{{ route('cottage.create') }}" class="btn btn-primary">Add Cottage or Lodge</a>
    </div>
    <hr />
    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    <table class="table table-hover">
        <thead class="table-primary">
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Description</th>
                <th>Cottage or Lodge</th>
                <th>Status</th>
                <th>Price Per Rent</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @if($cottage->count() > 0)
                @foreach($cottage as $rs)
                    <tr>
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        <td class="align-middle">{{ $rs->name }}</td>
                        <td class="align-middle">{{ $rs->description }}</td>
                        <td class="align-middle">{{ $rs->cottage_or_lodge }}</td>
                        <td class="align-middle">{{ $rs->status }}</td>  
                        <td class="align-middle">{{ $rs->price_for_rent }}</td>  
                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ route('cottage.show', $rs->id) }}" type="button" class="btn btn-secondary">Detail</a>
                                <a href="{{ route('cottage.edit', $rs->id)}}" type="button" class="btn btn-warning">Edit</a>
                                <form action="{{ route('cottage.destroy', $rs->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger m-0">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td class="text-center" colspan="5">Cottage and Lodge was not found</td>
                </tr>
            @endif
        </tbody>
    </table>
@endsection