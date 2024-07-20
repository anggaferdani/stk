<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WhyTradersChooseUs extends Model
{
    use HasFactory;

    protected $table = 'why_traders_choose_us';

    protected $primaryKey = 'id';

    protected $guarded = [];
}
