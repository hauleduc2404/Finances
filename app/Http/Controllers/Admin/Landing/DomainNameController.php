<?php

namespace App\Http\Controllers\Admin\Landing;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Landing\DomainName\AddDomainNameRequest;
use App\Http\Requests\Admin\Landing\DomainName\RemoveDomainNameRequest;
use App\Http\Requests\Admin\Landing\DomainName\UpdateDomainNameRequest;
use App\Services\DomainNameService;
use Illuminate\Http\Request;

class DomainNameController extends Controller
{
    public function index()
    {
        $mode = 'view';
        $domainName = DomainNameService::getDomainName();
        return view('admin.pages.cms.landing-page.domain-change.index', compact('mode', 'domainName'));
    }

    public function add(AddDomainNameRequest $request)
    {
        if (DomainNameService::isLimited()) {
            return redirect()->back()->with('fail', 'Số lượng tối đa là 1');
        }

        $name = $request->input('name');

        if (DomainNameService::addDomainName($name)) {
            return redirect()->back()->with('success', 'Thêm thành công!');
        }

        return redirect()->back()->with('fail', 'Lỗi hệ thống [DomainName:01]!');
    }

    public function detail($id)
    {
        $mode = 'edit';
        $domainName = DomainNameService::getDomainName();
        return view('admin.pages.cms.landing-page.domain-change.index', compact('mode', 'domainName'));
    }

    public function update($id, AddDomainNameRequest $request)
    {
        if (DomainNameService::update($id, $request)) {
            $mode = 'view';
            return redirect()->back()->with('success', 'Cập nhật thành công!');
        }
        return redirect()->back()->with('fail', 'Lỗi hệ thống [DomainName:01]!');
    }

    public function remove(RemoveDomainNameRequest $request)
    {
        
    }
}
