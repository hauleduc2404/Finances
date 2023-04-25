<?php

namespace App\Providers;

use App\Services\DomainNameService;
use App\Services\SettingService;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $settingService = new SettingService();
        $setting = $settingService->getSetting();
        $websiteName = isset(DomainNameService::getDomainName()->name) ? DomainNameService::getDomainName()->name : 'Website Name';
        View::share('supportLink', $setting->support_link ?? '');
        View::share('websiteName', $websiteName);
    }
}
