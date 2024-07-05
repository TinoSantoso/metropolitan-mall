<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tenant;
use Illuminate\Support\Facades\Storage;
use GuzzleHttp\Client;

class TenantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tenants = Tenant::orderBy('created_at', 'DESC')->get();
        return view('tenant.index', compact('tenants'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tenant.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'tenant_id' => 'required|unique:tenants,tenant_id',
            'tenant_name' => 'required',
            'pic_name' => 'required',
            'pic_telp' => 'required',
            'tenant_floor' => 'required',
            'tenant_lot' => 'required',
            'tenant_logo' => 'required|url',
            'tenant_category' => 'required',
            'tenant_status' => 'required',
            'participant_evoucher' => 'required'
        ]);

        Tenant::create([
            'tenant_id' => $request->tenant_id,
            'tenant_name' => $request->tenant_name,
            'pic_name' => $request->pic_name,
            'pic_telp' => $request->pic_telp,
            'tenant_floor' => $request->tenant_floor,
            'tenant_lot' => $request->tenant_lot,
            'tenant_logo' => $request->tenant_logo,
            'tenant_category' => $request->tenant_category,
            'tenant_status' => $request->tenant_status,
            'participant_evoucher' => $request->participant_evoucher
        ]);

        return redirect()->route('tenant.index')->with('success', 'Tenant added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $tenant = Tenant::findOrFail($id);
        return view('tenant.show', compact('tenant'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $tenant = Tenant::findOrFail($id);
        return view('tenant.edit', compact('tenant'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'tenant_id' => 'required|unique:tenants,tenant_id,' . $id,
            'tenant_name' => 'required',
            'pic_name' => 'required',
            'pic_telp' => 'required',
            'tenant_floor' => 'required',
            'tenant_lot' => 'required',
            'tenant_logo' => 'required|url',
            'tenant_category' => 'required',
            'tenant_status' => 'required',
            'participant_evoucher' => 'required'
        ]);

        $tenant = Tenant::findOrFail($id);

        $tenant->update([
            'tenant_id' => $request->tenant_id,
            'tenant_name' => $request->tenant_name,
            'pic_name' => $request->pic_name,
            'pic_telp' => $request->pic_telp,
            'tenant_floor' => $request->tenant_floor,
            'tenant_lot' => $request->tenant_lot,
            'tenant_logo' => $request->tenant_logo,
            'tenant_category' => $request->tenant_category,
            'tenant_status' => $request->tenant_status,
            'participant_evoucher' => $request->participant_evoucher
        ]);

        return redirect()->route('tenant.index')->with('success', 'Tenant updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $tenant = Tenant::findOrFail($id);
        if ($tenant->tenant_logo) {
            Storage::delete('public/images/' . $tenant->tenant_logo);
        }
        $tenant->delete();

        return redirect()->route('tenant.index')->with('success', 'Tenant deleted successfully');
    }

    public function getAllTenants()
    {
        $client = new Client();
        $response = $client->request('GET', 'https://apiloyalty.metropolitanland.com/getAllTenants', [
            'headers' => [
                'mid-api-key' => 'wePzGR4hIYYvVOd6p8vGWyt6CXGq1o0J',
                'Accept' => 'application/json',
            ],
        ]);
    
        $statusCode = $response->getStatusCode();
        $body = $response->getBody()->getContents();
        $data = json_decode($body, true);
    
        if ($statusCode === 200 && isset($data['status']) && $data['status'] === 1) {
            $formattedData = [];
            foreach ($data['data'] as $tenantData) {
                $formattedData[] = [
                    'TENANT_ID' => $tenantData['TENANT_ID'],
                    'TENANT_NAME' => $tenantData['TENANT_NAME'],
                    'PIC_NAME' => $tenantData['PIC_NAME'],
                    'PIC_Telp' => $tenantData['PIC_Telp'],
                    'TENANT_FLOOR' => $tenantData['TENANT_FLOOR'],
                    'TENANT_LOT' => $tenantData['TENANT_LOT'],
                    'TENANT_LOGO' => $tenantData['TENANT_LOGO'],
                    'TENANT_CATEGORY' => $tenantData['TENANT_CATEGORY'],
                    'TENANT_STATUS' => $tenantData['TENANT_STATUS'],
                    'PARTICIPANT_EVOUCHER' => $tenantData['PARTICIPANT_EVOUCHER']
                ];
            }
    
            return response()->json([
                'statusCode' => $statusCode,
                'data' => $formattedData,
                'message' => 'Data retrieved successfully.',
            ]);
        } else {
            return response()->json([
                'statusCode' => $statusCode,
                'message' => 'Failed to fetch data from API.',
            ], $statusCode);
        }
    }
}
