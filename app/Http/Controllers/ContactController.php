<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    public function submit(ContactRequest $param)
    {
//        $validation = $param->validate([
//            'subject' => 'required | min: 5 | max: 50',
//            'message' => 'required',
//
//        ]);
        dd($param->input('subject'));
    }
}
