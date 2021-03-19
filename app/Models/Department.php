<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
  //  use HasFactory;
    protected $fillable = [
        'id',
        'Partner_id',
        'Title',
        'Description',
        'CreatedBy',
        'IsActive',
        'IsDeleted'

    ];

    public function Department()
    {
        return $this->belongsTo(Department::class);
    }
}
