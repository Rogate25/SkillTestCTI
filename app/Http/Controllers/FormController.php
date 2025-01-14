<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subscription;

class FormController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'firstName' => 'required|string|max:255',
            'LastName' => 'required|string|max:255',
            'CorporateEmail' => 'required|email|unique:subscription,CorporateEmail',
            'JobTitle' => 'required|string|max:255',
            'CompanyName' => 'required|string|max:255',
            'Industry' => 'required|in:IT,Computer,Network',
            'PhoneNumber' => 'required|string|max:15',
        ], [
            'CorporateEmail.unique' => 'The email has already been taken.',
            'Industry.in' => 'The selected industry is invalid.',
        ]);

        Subscription::create($validated);

        return redirect()->route('subscription.thankYou')->with('success', 'Subscription successful!');
    }
}

