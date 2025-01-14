<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subscription;

class FormController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'firstName' => 'required|string|max:255',
            'LastName' => 'required|string|max:255',
            'CorporateEmail' => 'required|email|unique:subscription,CorporateEmail',
            'JobTitle' => 'required|string|max:255',
            'CompanyName' => 'required|string|max:255',
            // 'Industry' => 'required|in:IT,Computer,Network',
            'PhoneNumber' => 'required|string|max:15',
        ], [
            'CorporateEmail.unique' => 'The email has already been taken.',
            // 'Industry.in' => 'The selected industry is invalid.',
        ]);

        Subscription::create([
            'firstName' => $request->input('firstName'),
            'LastName' => $request->input('LastName'),
            'CorporateEmail' => $request->input('CorporateEmail'),
            'JobTitle' => $request->input('JobTitle'),
            'CompanyName' => $request->input('CompanyName'),
            //'Industry' => $request->input('Industry'),
            'Industry' => 'IT',
            'PhoneNumber' => $request->input('PhoneNumber'),
        ]);

        return view('thanks');
    }
}

