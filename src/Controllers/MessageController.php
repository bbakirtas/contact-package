<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;

class MessageController extends Controller
{
    public function store(Request $request)
    {
        // Form doğrulama
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string'
        ]);

        // Veriyi kaydet
        Message::create([
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message
        ]);

        return redirect()->back()->with('success', 'Mesajınız başarıyla gönderildi!');
    }

    public function index()
    {
        // Tüm mesajları al
        $messages = Message::all();
        return view('contact', compact('messages'));
    }
}
