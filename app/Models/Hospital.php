<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hospital extends Model
{
    use HasFactory;

    protected $table = 'hospitals';
    public $timestamps = false;

    protected $fillable = [
        'hospital_name',
        'location',
        'hospital_contact_number',
        'admin_id',
    ];
}
