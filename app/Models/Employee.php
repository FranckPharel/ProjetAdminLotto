<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = [
        'Address',
        'SecurityCode', 
        'email',
        'Partner_id',
        'Station_id' ,
        'Department_id' ,
        'Address' ,
        'Firstname' ,
        'Lastname' ,
        'PrimaryPhoneNumber' ,
        'SecondaryPhoneNumber' ,
        'Skype' ,
        'SecurityCode' ,
        'Email',
        'BornOn' ,
        'BaseSalary' ,
        'IsMale' ,
        'IsBlocked' ,
        'IsDeleted' ,
        'RegisteredOn',
        'CreatedOn' ,
        'UpdateOn' ,
        'Cashier_id', 
        'IsManager',
        'Activities'
];

public function Employee()
{
    return $this->hasMany(Employee::class);
}

}
