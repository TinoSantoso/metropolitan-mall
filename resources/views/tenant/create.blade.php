@extends('layouts.app')

@section('title', 'Create Tenant')

@section('contents')

    <hr />
    <form action="{{ route('tenant.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <label for="tenant_id">Tenant ID:</label>
                <input type="text" name="tenant_id" id="tenant_id" class="form-control" placeholder="Tenant ID" required>
            </div>
            <div class="col">
                <label for="tenant_name">Tenant Name:</label>
                <input type="text" name="tenant_name" id="tenant_name" class="form-control" placeholder="Tenant Name" required>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <label for="pic_name">PIC Name:</label>
                <input type="text" name="pic_name" id="pic_name" class="form-control" placeholder="PIC Name" required>
            </div>
            <div class="col">
                <label for="pic_telp">PIC Telp:</label>
                <input type="text" name="pic_telp" id="pic_telp" class="form-control" placeholder="PIC Telp" required>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <label for="tenant_floor">Floor:</label>
                <input type="text" name="tenant_floor" id="tenant_floor" class="form-control" placeholder="Floor" required>
            </div>
            <div class="col">
                <label for="tenant_lot">Lot:</label>
                <input type="text" name="tenant_lot" id="tenant_lot" class="form-control" placeholder="Lot" required>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <label for="tenant_logo">Logo URL:</label>
                <input type="url" name="tenant_logo" id="tenant_logo" class="form-control" placeholder="Logo URL" required>
            </div>
            <div class="col">
                <label for="tenant_category">Category:</label>
                <input type="text" name="tenant_category" id="tenant_category" class="form-control" placeholder="Category" required>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <label for="tenant_status">Status:</label>
                <input type="text" name="tenant_status" id="tenant_status" class="form-control" placeholder="Status" required>
            </div>
            <div class="col">
                <label for="participant_evoucher">Participant Evoucher:</label>
                <input type="text" name="participant_evoucher" id="participant_evoucher" class="form-control" placeholder="Participant Evoucher" required>
            </div>
        </div>

        <div class="row">
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection
