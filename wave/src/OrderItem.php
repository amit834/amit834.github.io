<?php

namespace Wave;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Facades\Voyager;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class OrderItem extends Model
{
    use HasFactory;
    
    protected $table = 'order_line_items';

    protected $fillable = ['table_order_id','order_id','line_item_id','legacy_item_id','title','line_item_cost_value','line_item_cost_currency','quantity','sold_format','listing_market_place_id','purchase_market_place_id','line_item_fulfillment_status','total_value','total_currency','shipping_cost_value','shipping_cost_currency','item_location','item_location_country_code','item_location_postal_code']; 
}
