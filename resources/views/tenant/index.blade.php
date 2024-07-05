@extends('layouts.app')

@section('title', 'List Tenant')

@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">List Tenant</h1>
        <a href="{{ route('tenant.create') }}" class="btn btn-primary" style="background-color: #38877f;">Add tenant</a>
    </div>
    <hr />
    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">List Tenant</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Photos</th>
                            <th>Nama Tenant</th>
                            <th>Category</th>
                            <th>Floor</th>
                            <th>Lot</th>
                            <th>PIC Name</th>
                            <th>PIC Telp</th>
                            <th>Status</th>
                            <th>Participant eVoucher</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if($tenants->count() > 0)
                            @foreach($tenants as $rs)
                                <tr>
                                    <td class="align-middle">{{ $loop->iteration }}</td>
                                    <td class="align-middle">
                                        @if($rs->tenant_logo)
                                            <img src="{{ $rs->tenant_logo }}" class="img-thumbnail" style="max-width: 100px;" alt="Tenant Image">
                                        @else
                                            <p>No image</p>
                                        @endif
                                    </td>
                                    <td class="align-middle">{{ $rs->tenant_name }}</td>
                                    <td class="align-middle">{{ $rs->tenant_category }}</td>
                                    <td class="align-middle">{{ $rs->tenant_floor }}</td>
                                    <td class="align-middle">{{ $rs->tenant_lot }}</td>
                                    <td class="align-middle">{{ $rs->pic_name }}</td>
                                    <td class="align-middle">{{ $rs->pic_telp }}</td>
                                    <td class="align-middle">{{ $rs->tenant_status }}</td>
                                    <td class="align-middle">{{ $rs->participant_evoucher }}</td>
                                    <td class="align-middle">
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <a href="{{ route('tenant.show', $rs->id) }}" type="button" class="btn btn-secondary">Detail</a>
                                            <a href="{{ route('tenant.edit', $rs->id)}}" type="button" class="btn btn-warning">Edit</a>
                                            <form action="{{ route('tenant.destroy', $rs->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
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
                                <td class="text-center" colspan="11">Tenant not found</td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="container">
        <h1>Save Tenants</h1>
        <hr />
        <button id="saveDataBtn" class="btn btn-primary">Save to Database</button>
    </div>

    <script>
        document.getElementById('saveDataBtn').addEventListener('click', function() {
            fetch('{{ route('tenant.save') }}')
            .then(response => {
                if (!response.ok) {
                    throw new Error('Failed to save data to database.');
                }
                return response.json();
            })
            .then(data => {
                if (data.statusCode === 200) {
                    alert('Data saved to database successfully.');
                    location.reload(); // Reload the page to see the new data
                } else {
                    alert('Failed to save data to database.');
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert('An error occurred while saving data to database.');
            });
        });
    </script>

@endsection
