<?php

namespace AmirNajmi\ContactUs\Facades;

use Illuminate\Support\Facades\Facade;

class ContactUs extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return 'contactus';
    }
}
