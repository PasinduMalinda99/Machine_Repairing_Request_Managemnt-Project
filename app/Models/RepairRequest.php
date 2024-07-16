<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RepairRequest extends Model
{
    use HasFactory;

    protected $fillable = [
        'device_type',
        'device_information',
        'issue_description',
        'email',
        'mobile_number',
        'additional_details',
        'status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
