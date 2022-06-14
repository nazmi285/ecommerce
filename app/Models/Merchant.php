<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Merchant extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'merchant_no',
        'name',
        'email',
        'contact_no'
    ];

    public static function merchantNo(){

        $merchant_no = random_str('8','1234567890');

        if(!empty($merchant_no) && !\App\Models\Merchant::where('merchant_no', $merchant_no)->count()){
            $Merchant = \App\Models\Merchant::create(['merchant_no'=>$merchant_no]); 
            return $Merchant;
        }else{
            \App\Models\Merchant::merchantNo();
        }
    }

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
