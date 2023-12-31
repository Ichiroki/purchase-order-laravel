<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PurchaseOrder extends Model
{
    protected $fillable = [
        'id',
        'date_send',
        'status',
        'supplier',
        'total_price',
        'note',
        'user',
        'date_order'
    ];

    public function outlet() {
        return $this->belongsTo(Outlet::class);
    }

    public function inventory() {
        return $this->belongsTo(Inventory::class);
    }

    use HasFactory;
}
