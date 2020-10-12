<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;

use Illuminate\Database\Eloquent\Model;

class EventsOnefourfive extends Model
{
	use HasDateTimeFormatter;
    protected $table = 'events_onefourfive';
    public $timestamps = false;

    protected $fillable = [
        'name',
        'tel',
        'category',
        'content',
        'created_at'
    ];
}
