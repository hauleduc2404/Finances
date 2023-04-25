<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class UploadImageController extends Controller
{
    public function upload(Request $request)
    {
        if ($request->hasFile('file')) {
            $imageExtensionValid = ['png', 'jpeg', 'jpg'];
            $file = $request->file('file');
            $extensions = $file->getClientOriginalExtension();
            if(!in_array($extensions, $imageExtensionValid)) {
                return response()->json(['error' => 1, 'url' => '']);
            }

            $name = 'kyc_'.Str::random(20).'.'.$file->getClientOriginalExtension();
            Storage::disk('public')->put($name, File::get($file));
            $link = Storage::url($name);
            return response()->json(['error' => 0, 'url' => $link]);
        }
    }
}
