<?php

namespace App\Services;

use App\Models\DomainName;
use Illuminate\Http\Request;

class DomainNameService
{
    public static function getDomainName()
    {
        return DomainName::first();
    }

    public static function isLimited()
    {
        return DomainName::count() >= config('landing.limit.site-name');
    }

    public static function detail($id)
    {
        return DomainName::findOrFail($id);
    }

    public static function update($id, Request $request)
    {
        $intro = DomainName::where('id', $id)->update([
            'name' => $request->input('name')
        ]);
        return $intro;
    }

    public static function addDomainName($name)
    {
        return DomainName::insert([
            'name' => $name,
        ]);
    }

    public static function remove($id)
    {
        return DomainName::destroy($id);
    }
}
