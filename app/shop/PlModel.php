<?php

namespace App\shop;

use Illuminate\Database\Eloquent\Model;

class PlModel extends Model
{
    protected $table = 'tp_pl';
    protected $primaryKey = 'p_id';
    public $timestamps = true;
    protected $fillable = [
        'p_email',
        'p_lv',
        'p_desc',
        
    ];
    const CREATED_AT = 'create_time';
    const UPDATED_AT = 'update_time';
}
