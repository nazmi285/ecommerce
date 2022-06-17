<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $fillable = [
        'product_no',
    ];

    public static function productNo(){

        $product_no = random_str('8','1234567890');

        if(!empty($product_no) && ! static::where('product_no', $product_no)->count()){
            $product = static::create(['product_no'=>$product_no]); 
            return $product;
        }else{
            static::productNo();
        }
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($query) {
            // $query->created_by = auth()->id();
            // $query->updated_by = auth()->id();
            $query->merchant_id = auth()->user()->merchant->first()->id;
        });

        // static::saving(function ($query) {
        //     $query->updated_by = auth()->id();
        // });
    }

    public function merchant()
    {
        return $this->belongsTo(Merchant::class);
    }
}
