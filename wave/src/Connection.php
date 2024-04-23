<?php

namespace Wave;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Facades\Voyager;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Connection extends Model
{
    use HasFactory;
    
    protected $table = 'connections';
    protected $fillable = ['app_id','dev_id','client_secret','api_uri','api_auth_uri','is_active','type']; 
}
