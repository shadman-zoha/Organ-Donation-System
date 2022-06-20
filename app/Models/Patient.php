<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    protected $table = 'patients';
    public $timestamps = false;

    protected $fillable = [
        'IC_Number',
        'id',
        'name',
        'Date_Of_Birth',
        'Phone_Number',
        'Address',
        'Blood_Group',
        'Age',
        'Weight',
        'Gender',
        'Secret_Question',
        'QuesAnswer',
        'Family_Contact',
        'Family_Contact_Name',
        'avatar'
    ];
}
