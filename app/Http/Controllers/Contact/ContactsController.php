<?php

namespace App\Http\Controllers\Contact;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Log;

class ContactsController extends Controller
{
    public function index()
    {
        return view('contact.index');
    }

    public function send(Request $request)
    {
        // 送信された内容を取得
        $contents = [
            '名前' => $request->input('name'),
            'メールアドレス' => $request->input('email'),
            '問い合わせ内容' => $request->input('content'),
        ];

        // ログに出力
        Log::notice($contents);

        // 完了ページにリダイレクト
        return redirect()->route('contact.complate');
    }

    public function complate()
    {
        return view('contact.complate');
    }
}
