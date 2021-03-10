<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Betshop extends Model
{
    protected $fillable=[
        'BetStation_id',
        'Currency_id',
        'Title',
        'IsBlocked',
        'Message',
        'CurrentBalance',
        'CurrentLimit',
        'Turnover',
        'WonAmount',
        'CanceledAmount',
        'DepositAmount',
        'ContractPercentage',
        'LastBalanceCaculationDate',
        'CreatedBy',
        'CreatedOn',
        'UpdatedOn',
        'IsDeleted',
        'MinStakeAmount',
        'MinEventCount',
        'MaxStakeAmount',
        'MaxEventCount',
        'MaxDayCount',
        'MaxOddValue',
        'MaxPayoutAmount',
        'BookmakerId',
        'IsHoldOptimized',
        'ActivateLive',
        'Activities',
        'Credit',
        'IsAgent',
    ]; 
    
    public function betStation()
    {
        return $this->belongsTo(BetStation::class, 'BetStation_id');
    }
    
    public function currency()
    {
        return $this->belongsTo(Currency::class, 'Currency_id');
    }
    
    
}
