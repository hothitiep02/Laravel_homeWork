<?php

namespace App\Models\Eloquent;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $table = 'customer';
    protected $fillable = [
        'name', 'gender', 'email', 'address', 'phone_number', 'note', 'created_at', 'updated_at'
    ];

    public function bills()
    {
        return $this->hasMany(Bill::class, 'id_customer');
    }
}
