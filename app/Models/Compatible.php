<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compatible extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'compatibles';

    protected $fillable = [
        'donor_id',
        'recepient_id',
        'organ_name',
        'compatible_status',
    ];
}
