<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BetStation extends Model
{
    protected $fillable = [
        'Partner_id',
        'Currency_id',
        'Title',
        'LogoImage',
        'LogoContentType',
        'LogoFileName',
        'IsBlocked',
        'Message',
        'CurrentBalance',
        'CurrentLimit',
        'DepositAmount',
        'Turnover',
        'WonAmount',
        'CanceledAmount',
        'PaidOutAmount',
        'ContractPercentage',
        'LastBalanceCaculationDate',
        'CreatedBy',
        'CreatedOn',
        'UpdatedOn',
        'IsDeleted',
        'SuperBonusLimit',
        'TombolaStartAmount',
        'TombolaEndAmount',
        'CurrentTombolaAmount',
        'TombolaPercentage',
        'IsJackpotEnabled',
        'LastDrawingDate',
        'OnlineCredit',
        'NotificationEmail',
        'NotificationPhoneNumber',
        'ConsolidateShopOdds',
        'ShopUserCashierId',
        'Activities',
        'LocalWebSocket',
        'LocalWebHost',
        'Credit'
    ];
    
    public function partner()
    {
        return $this->belongsTo(Partner::class, 'Partner_id');
    }
    
    public function currency()
    {
        return $this->belongsTo(Currency::class, 'Currency_id');
    }
    
    
}
