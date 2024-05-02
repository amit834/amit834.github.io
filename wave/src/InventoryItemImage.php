<?php

namespace Wave;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Facades\Voyager;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class InventoryItemImage extends Model
{
    use HasFactory;
    
    protected $table = 'listing_inventory_item_images';
    protected $fillable = ['listing_id','inventory_item_id','image']; 
}
