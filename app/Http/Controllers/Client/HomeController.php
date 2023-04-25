<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Services\LandingAboutUsService;
use App\Services\LandingIntroService;
use App\Services\LandingServiceModelService;
use App\Services\LandingLoanAdviserService;
use App\Services\LandingSliderService;
use App\Services\DomainNameService;

class HomeController extends Controller
{
//    private LandingService $landingService;
    public function __construct()
    {
//        $this->landingService = new LandingService();
    }

    public function index()
    {
        $intros = LandingIntroService::getAllIntro();
        $aboutUs = LandingAboutUsService::get();
        $loanAdviser = LandingLoanAdviserService::getAllLoanAdviser();
        $services = LandingServiceModelService::getAllServiceWithRelated();
        $sliders = LandingSliderService::getAllSlider();
        $domainName = DomainNameService::getDomainName();
        return view('client.pages.index.index', compact(
            'intros',
            'aboutUs',
            'loanAdviser',
            'services',
            'sliders',
            'domainName'
        ));
    }
}
