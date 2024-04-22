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

    //Define the relationship with the User model
    public function user_detail(){
        return $this->belongsTo(User::class, 'user_id');
    }

    //Define the relationship with the OrderItem model. An order has many order items.
    public function order_items(){
        return $this->hasMany(OrderItem::class,'table_order_id');
    }

    //Define the relationship with the Buyer model
    public function buyer_detail(){
        return $this->belongsTo(BuyerDetail::class, 'id','table_order_id');
    }

    //Define the relationship with the ShippinDetail model
    public function shipping_detail(){
        return $this->belongsTo(ShippinDetail::class, 'id','table_order_id');
    }
}
