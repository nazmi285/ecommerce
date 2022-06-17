<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_no',
    ];
    
    public static function orderNo(){

        $order_no = random_str('8','1234567890');

        if(!empty($order_no) && ! static::where('order_no', $order_no)->count()){
            $order = static::create(['order_no'=>$order_no]); 
            return $order;
        }else{
            static::orderNo();
        }
    }

    public function merchant()
    {
        return $this->belongsTo(Merchant::class);
    }

    public function payments()
    {
        return $this->morphMany(Payment::class, 'paymentable');
    }
}
