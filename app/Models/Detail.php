<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    use HasFactory;
    protected $fillable = ['program_id', 'link', 'image', 'type_listing',  'payout_ratio',
    'ref_back', 'our_rate', 'our_investment', 'min', 'max',
    'referral', 'withdraw_type', 'plans_description', 'payeer', 'perfect_money', 'bitcoin', 'litecoin', 'bitcoin_cash', 'ethereum', 'usdt_bep20', 'usdt_trc20', 'epaycore', 'tron', 'bnb', 'advcash', 'okpay', 'mastercard', 'solidtrustpay', 'webmoney', 'paypal', 'yandex', 'nxmoney', 'dash',
    'dogecoin', 'ripple', 'stellar', 'bertycash', 'sslsecurtiy', 'ddos'
    ];
    public function program() {
        return $this->belongsTo(Program::class);
    }
}
