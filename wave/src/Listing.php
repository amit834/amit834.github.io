<?php

namespace Wave;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Facades\Voyager;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Listing extends Model
{
    use HasFactory;
    
    protected $table = 'listings';
    protected $fillable = ['user_id','listing_id','market_place_id','status','connection_type']; 
}
