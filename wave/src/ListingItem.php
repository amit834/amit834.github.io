<?php

namespace Wave;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Facades\Voyager;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ListingItem extends Model
{
    use HasFactory;
    
    protected $table = 'listing_inventory_items';
    protected $fillable = ['listing_id','sku','offer_id','location_availability_quantity','condition','product_title','product_description','product_brand','product_aspects','product_mpn']; 
}
