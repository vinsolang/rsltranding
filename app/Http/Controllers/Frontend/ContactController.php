<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;

class ContactController extends Controller
{
    public function index()
    {
        return view('frontend.contact');
    }

    public function send(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'company' => 'nullable',
            'trade_type' => 'required',
            'country' => 'required',
            'commodities' => 'nullable|array',
            'address' => 'nullable',
            'email' => 'required|email',
            'message' => 'nullable',
        ]);

        $text = "📩 *New Contact Form*\n\n";
        $text .= "👤 Name: {$data['name']}\n";
        $text .= "📞 Phone: {$data['phone']}\n";
        $text .= "🏢 Company: {$data['company']}\n";
        $text .= "🔄 Trade: {$data['trade_type']}\n";
        $text .= "🌍 Country: {$data['country']}\n";
        $text .= "📦 Commodities: " . implode(', ', $data['commodities'] ?? []) . "\n";
        $text .= "🏠 Address: {$data['address']}\n";
        $text .= "📧 Email: {$data['email']}\n";
        $text .= "💬 Message: {$data['message']}";

        Http::post("https://api.telegram.org/bot" . env('TELEGRAM_BOT_TOKEN') . "/sendMessage", [
            'chat_id' => env('TELEGRAM_CHAT_ID'),
            'text' => $text,
            'parse_mode' => 'Markdown'
        ]);

        return back()->with('success', 'Message sent successfully!');
    }

    public function careerForm(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|string',
            'position' => 'required|string',
            'cv' => 'nullable|file|mimes:pdf,doc,docx|max:5120',
            'cover_letter' => 'nullable|file|mimes:pdf,doc,docx|max:5120',
        ]);

        $name = $request->name;
        $email = $request->email;
        $phone = $request->phone;
        $position = $request->position;

        $telegramToken = env('TELEGRAM_BOT_TOKEN');
        $chatId = env('TELEGRAM_CHAT_ID');

        $text = "📩 New Career Form Submission\n";
        $text .= "👤 Name: $name\n";
        $text .= "📧 Email: $email\n";
        $text .= "📱 Phone: $phone\n";
        $text .= "💼 Position: $position\n";
        // Send message to Telegram
        Http::post("https://api.telegram.org/bot$telegramToken/sendMessage", [
            'chat_id' => $chatId,
            'text' => $text,
        ]);

        // Send CV if uploaded
        if ($request->hasFile('cv')) {
            $cv = $request->file('cv');
            Http::attach(
                'document',
                file_get_contents($cv->getRealPath()),
                'CV_' . $cv->getClientOriginalName()
            )->post("https://api.telegram.org/bot$telegramToken/sendDocument", [
                'chat_id' => $chatId,
            ]);
        }

        // Send Cover Letter if uploaded
        if ($request->hasFile('cover_letter')) {
            $coverLetter = $request->file('cover_letter');
            Http::attach(
                'document',
                file_get_contents($coverLetter->getRealPath()),
                'CoverLetter_' . $coverLetter->getClientOriginalName()
            )->post("https://api.telegram.org/bot$telegramToken/sendDocument", [
                'chat_id' => $chatId,
            ]);
        }

        return back()->with('success', 'Your application has been sent!');
    }
}
