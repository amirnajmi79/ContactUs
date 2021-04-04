<?php

namespace AmirNajmi\ContactUs;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ContactUs extends Model
{
    use SoftDeletes;
    public $table = 'contact_us';
    protected $guarded = [];

}
