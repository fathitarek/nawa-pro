<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;


class HotOffersDiscount extends Model
{
    use Translatable;
    protected $translatable = ['text'];
    protected $table = 'hot_offers_discounts';

    protected $fillable = ['text'];

    
}
