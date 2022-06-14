<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visitor extends Model
{
    use HasFactory;

    protected $fillable = ['unique_id', 'merchant_id', 'ip', 'user', 'device', 'os', 'os_version', 'browser', 'browser_version', 'count_page','today'];
}
