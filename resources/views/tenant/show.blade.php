@extends('layouts.app')

@section('title', 'Show Tenant')

@section('contents')
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Logo</label>
            <div class="image-container">
                @if($tenant->tenant_logo)
                    <img src="{{ $tenant->tenant_logo }}" class="img-fluid" alt="Tenant Logo">
                @else
                    <p>No logo available</p>
                @endif
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Tenant Name</label>
            <input type="text" name="tenant_name" class="form-control" placeholder="Tenant Name" value="{{ $tenant->tenant_name }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Category</label>
            <input type="text" name="category" class="form-control" placeholder="Category" value="{{ $tenant->tenant_category }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">PIC Name</label>
            <input type="text" name="pic_name" class="form-control" placeholder="PIC Name" value="{{ $tenant->pic_name }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">PIC Telp</label>
            <input type="text" name="pic_telp" class="form-control" placeholder="PIC Telp" value="{{ $tenant->pic_telp }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Floor</label>
            <input type="text" name="floor" class="form-control" placeholder="Floor" value="{{ $tenant->tenant_floor }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Lot</label>
            <input type="text" name="lot" class="form-control" placeholder="Lot" value="{{ $tenant->tenant_lot }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Status</label>
            <input type="text" name="status" class="form-control" placeholder="Status" value="{{ $tenant->tenant_status }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Participant eVoucher</label>
            <input type="text" name="evoucher" class="form-control" placeholder="Participant eVoucher" value="{{ $tenant->participant_evoucher }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Created At</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $tenant->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Updated At</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $tenant->updated_at }}" readonly>
        </div>
    </div>
@endsection
