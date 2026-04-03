<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Table;
use Illuminate\Database\Eloquent\Model;

#[Table('customer_addresses')]
#[Fillable(['customer_id','address_type', 'address_line_1','address_line_2', 'city', 'zip','is_default'])]
class CustomerAddress extends Model
{
    public function casts()
    {
        return [
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
        ];
    }
    public function customer(){
        return $this->belongsTo(Customer::class,'customer_id','id');
    }
}
