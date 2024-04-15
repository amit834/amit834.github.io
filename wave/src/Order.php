<?php

namespace Wave;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Facades\Voyager;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model
{
    use HasFactory;
    
    protected $table = 'orders';

    protected $fillable = ['user_id','order_id','legacy_order_id','creation_date','last_modified_date','order_fulfillment_status','order_payment_status','seller_id','ebay_collect_and_remit_tax','sales_record_reference','total_fee_basis_amount_value','total_fee_basis_amount_value_currency','total_market_place_fee_value','total_market_place_fee_currency','connection_type']; 
}
