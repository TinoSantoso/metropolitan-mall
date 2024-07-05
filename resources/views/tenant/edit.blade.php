@extends('layouts.app')

@section('title', 'Edit Tenant')

@section('contents')
    <h1 class="mb-0">Edit Tenant</h1>
    <hr />
    <form action="{{ route('tenant.update', $tenant->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row mb-3">
            <div class="col">
                <label for="tenant_id">Tenant ID:</label>
                <input type="text" name="tenant_id" id="tenant_id" class="form-control" value="{{ $tenant->tenant_id }}" required>
            </div>
            <div class="col">
                <label for="tenant_name">Tenant Name:</label>
                <input type="text" name="tenant_name" id="tenant_name" class="form-control" value="{{ $tenant->tenant_name }}" required>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <label for="pic_name">PIC Name:</label>
                <input type="text" name="pic_name" id="pic_name" class="form-control" value="{{ $tenant->pic_name }}" required>
            </div>
            <div class="col">
                <label for="pic_telp">PIC Telp:</label>
                <input type="text" name="pic_telp" id="pic_telp" class="form-control" value="{{ $tenant->pic_telp }}" required>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <label for="tenant_floor">Floor:</label>
                <input type="text" name="tenant_floor" id="tenant_floor" class="form-control" value="{{ $tenant->tenant_floor }}" required>
            </div>
            <div class="col">
                <label for="tenant_lot">Lot:</label>
                <input type="text" name="tenant_lot" id="tenant_lot" class="form-control" value="{{ $tenant->tenant_lot }}" required>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <label for="tenant_logo">Logo URL:</label>
                <input type="url" name="tenant_logo" id="tenant_logo" class="form-control" value="{{ $tenant->tenant_logo }}" required>
            </div>
            <div class="col">
                <label for="tenant_category">Category:</label>
                <input type="text" name="tenant_category" id="tenant_category" class="form-control" value="{{ $tenant->tenant_category }}" required>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <label for="tenant_status">Status:</label>
                <input type="text" name="tenant_status" id="tenant_status" class="form-control" value="{{ $tenant->tenant_status }}" required>
            </div>
            <div class="col">
                <label for="participant_evoucher">Participant Evoucher:</label>
                <input type="text" name="participant_evoucher" id="participant_evoucher" class="form-control" value="{{ $tenant->participant_evoucher }}" required>
            </div>
        </div>

        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection
