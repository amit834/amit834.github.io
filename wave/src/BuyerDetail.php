<?php

namespace Wave;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Facades\Voyager;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BuyerDetail extends Model
{
    use HasFactory;
    
    protected $table = 'order_buyer_detail';

    protected $fillable = ['table_order_id','order_id','user_name','tax_address_state','tax_address_postal_code','tax_address_country_code','full_name','registration_address_line','registration_address_city','registration_address_state','registration_address_postal_code','registration_address_country_code','phone_number','email']; 
}
