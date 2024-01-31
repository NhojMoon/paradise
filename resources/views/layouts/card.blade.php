
<div class="container">
    <div class="row">
            <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Registered Customer</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $customerCount }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-users fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>


            <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-500 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-right">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Occuppied Rent</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $rentalCount }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-users fa-2x text-gray-500"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
        <div class="d-flex align-items-center justify-content-between">
        <!-- <h1 class="mb-0">List of Rental</h1> -->
        <!-- <a href="{{ route('rentals.create') }}" class="btn btn-primary">Add Rental</a> -->
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
                <th>Rental_Type</th>
                <th>Customer_id</th>
                <th>Start_Date</th>
                <th>End_Date</th>
                <th>Total_Price</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @if($rental->count() > 0)
                @foreach($rental as $rs)
                    <tr>
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        <td class="align-middle">{{ $rs->rental_type }}</td>
                        <td class="align-middle">{{ $rs->customer_id }}</td>
                        <td class="align-middle">{{ $rs->start_date }}</td>
                        <td class="align-middle">{{ $rs->end_date }}</td>
                        <td class="align-middle">{{ $rs->total_price }}</td>  
                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ route('rentals.show', $rs->id) }}" type="button" class="btn btn-secondary">Detail</a>
                                <a href="{{ route('rentals.edit', $rs->id)}}" type="button" class="btn btn-warning">Edit</a>
                                <form action="{{ route('rentals.destroy', $rs->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
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
                    <td class="text-center" colspan="5">Rental was not found</td>
                </tr>
            @endif
        </tbody>
    </table>
