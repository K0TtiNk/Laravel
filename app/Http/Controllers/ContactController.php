<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jobs\SendContactEmail;
use App\Mail\ContactFormSubmitted;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function show()
    {
        return view('contact');
    }

    public function submit(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'email' => 'required|email|max:255',
            'message' => 'nullable|string',
        ]);

        // Отправка в очередь
        SendContactEmail::dispatch($validated);

        return back()->with('success', 'Сообщение отправлено! Мы свяжемся с вами в ближайшее время.');
    }
}