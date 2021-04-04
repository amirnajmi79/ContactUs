<?php

namespace AmirNajmi\ContactUs;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactUsController extends Controller
{

    public function store(Request $request)
    {
        ContactUs::create([
            'name'  =>  $request['name'],
            'email'  =>  $request['email'],
            'title'  =>  $request['title'],
            'description'  =>  $request['description'],
        ]);

    }
}
