<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tenant extends Model
{
    use HasFactory;

    protected $fillable = [
        'tenant_id',
        'tenant_name',
        'pic_name',
        'pic_telp',
        'tenant_floor',
        'tenant_lot',
        'tenant_logo',
        'tenant_category',
        'tenant_status',
        'participant_evoucher'
    ];
}
