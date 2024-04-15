<?php

namespace Wave;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Facades\Voyager;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ShippinDetail extends Model
{
    use HasFactory;
    
    protected $table = 'order_shipping_detail';

    protected $fillable = ['table_order_id','order_id','ful_fillment_instructions_type','min_estimated_delivery_date','max_estimated_delivery_date','supported_fulfillment','full_name','address_line','city','postal_code','country_code','primary_phone','email','carrier_code','service_code']; 
}
