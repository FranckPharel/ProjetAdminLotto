<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    protected $fillable = [
        'title',
        'description',
        'CreatedOn',
        'UpdatedOn',
        'IsActive',
        'IsBlocked',
        'IsDeleted',
        'ContractPercentage',
        'AppKey',
        'Address',
        'Phone',
        'LogoImage',
        'LogoContentType',
        'LogoFileName',
        'PrintLogoImage',
        'PrintLogoContentType',
        'PrintLogoFileName',
        'Email',
        'IsSmsMsgEnabled',
        'IsEmailMsgEnabled',
        'IsUserMsgEnabled',
        'CashierClientLogoImage',
        'CashierClientLogoContentType',
        'CashierClientLogoFileName',
        'InvoiceBalance',
        'PaidBalance',
        'CurrencyId',
        'CurrentLimit'
    ];
}
