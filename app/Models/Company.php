<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
    protected $table = 'companies';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'business_owner_company_id', 'name', 'year', 'reg_nu','phone_nu','nu_machines','nu_sites'
    ];

    public function address()
    {
        return $this->morphOne(Address::class, 'address');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
