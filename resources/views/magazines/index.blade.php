@extends('layouts.app')

@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">List Magazines</h1>
        <a href="{{ route('magazines.create') }}" class="btn btn-primary" style="background-color: #38877f;">Add magazine</a>
    </div>
    <hr />
    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">List Magazines</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Photos</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>PDF URL</th>
                            <th>Previous PDF URL</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if($magazines->count() > 0)
                            @foreach($magazines as $magazine)
                                <tr>
                                    <td class="align-middle">{{ $loop->iteration }}</td>
                                    <td class="align-middle">
                                        @if($magazine->image)
                                            <img src="{{ asset('storage/images/'.$magazine->image) }}" class="img-thumbnail" style="max-width: 100px;" alt="Magazine Image">
                                        @else
                                            <p>No image</p>
                                        @endif
                                    </td>
                                    <td class="align-middle">{{ $magazine->title }}</td>
                                    <td class="align-middle">{{ Str::limit($magazine->description, 100) }}</td> <!-- Displaying only 100 characters of description -->
                                    <td class="align-middle">{{ $magazine->pdf_url }}</td>
                                    <td class="align-middle">{{ $magazine->previous_pdf_url ?? 'N/A' }}</td>
                                    <td class="align-middle">
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <a href="{{ route('magazines.show', $magazine->id) }}" type="button" class="btn btn-secondary">Detail</a>
                                            <a href="{{ route('magazines.edit', $magazine->id)}}" type="button" class="btn btn-warning">Edit</a>
                                            <form action="{{ route('magazines.destroy', $magazine->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
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
                                <td class="text-center" colspan="7">No magazine articles found</td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
