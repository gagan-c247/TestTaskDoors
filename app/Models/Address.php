<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    protected $table = 'addresses';

    protected $fillable = [
        'line1', 'line2', 'state','city','country','zip'
    ];

    public function address()
    {
        return $this->morphTo(__FUNCTION__, 'address_type', 'address_id');
    }
}
