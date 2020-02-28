<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\ShortUrl;

class ShortenerController {

    public static function checkShortUrl($short_url) {
        $url = ShortUrl::where('short_url', $short_url)->first();

        if ($url == null) {
            return abort(404);
        }

        return redirect()->to($url->long_url, 308);
    }

    public static function createShortUrl(Request $request) {
        $request->validate([
            'long_url' => 'required|url|max:65535',
        ]);

        $long_url = $request->long_url;

        $checkIfLongUrlInBase = ShortUrl::where('long_url', $long_url)->first();

        if ($checkIfLongUrlInBase) {
            return response()->json(['success'=>$checkIfLongUrlInBase->short_url]);
        }

        $short_url = new ShortUrl;

        $short_url->long_url = $long_url;

        do {
            $generated_short_url = Str::random(4);
        } 
        while (ShortUrl::where('short_url', $generated_short_url)->first());

        $short_url->short_url = $generated_short_url;

        $short_url->save();

        return response()->json(['success'=>$generated_short_url]);
    }
}