<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\KYC\KYCManagement;
use App\Http\Controllers\Admin\KYC\KYCVerifyController;
use App\Http\Controllers\Admin\Landing\AboutUsController;
use App\Http\Controllers\Admin\Landing\IntroController;
use App\Http\Controllers\Admin\Landing\SliderController;
use App\Http\Controllers\Admin\Landing\ServiceController;
use App\Http\Controllers\Admin\Landing\OurTeamController;
use App\Http\Controllers\Admin\Landing\ProcessController;
use App\Http\Controllers\Admin\Landing\PractiveAreaController;
use App\Http\Controllers\Admin\Landing\PractiveAreaItemController;
use App\Http\Controllers\Admin\Landing\LoanCalculatorController;
use App\Http\Controllers\Admin\Landing\LoanAdviserController;
use App\Http\Controllers\Admin\Landing\ApplyLoanController;
use App\Http\Controllers\Admin\Landing\ServiceBlockController;
use App\Http\Controllers\Admin\Landing\DomainNameController;
use App\Http\Controllers\Admin\LoanController;
use App\Http\Controllers\Admin\PayerController;
use App\Http\Controllers\Admin\SettingController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::group(['prefix' => 'admincp'], function () {
    Route::get('/login', [DashboardController::class, 'loginPage'])->name('dashboard.login');
    Route::post('/login', [DashboardController::class, 'login'])->name('dashboard.login.submit');


    Route::middleware('auth:admin')->group(function (){
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
        Route::get('/index', [DashboardController::class, 'index'])->name('dashboard');
        Route::get('/home', [DashboardController::class, 'index'])->name('dashboard');

        Route::group(['prefix' => 'cms'], function () {
            Route::group(['prefix' => 'landing-page'], function () {
                Route::group(['prefix' => 'intro'], function () {
                    Route::get('/', [IntroController::class, 'index'])->name('dashboard.cms.landing.intro');
                    Route::get('/detail/{id}', [IntroController::class, 'detail'])->name('dashboard.cms.landing.intro.detail');
                    Route::post('/update/{id}', [IntroController::class, 'update'])->name('dashboard.cms.landing.intro.update');
                    Route::post('/', [IntroController::class, 'add'])->name('dashboard.cms.landing.intro.add');
                    Route::post('/remove', [IntroController::class, 'remove'])->name('dashboard.cms.landing.intro.remove');

                });

                Route::group(['prefix' => 'slider'], function() {
                    Route::get('/', [SliderController::class, 'index'])->name('dashboard.cms.landing.slider');
                    Route::get('/detail/{id}', [SliderController::class, 'detail'])->name('dashboard.cms.landing.slider.detail');
                    Route::post('/update/{id}', [SliderController::class, 'update'])->name('dashboard.cms.landing.slider.update');
                    Route::post('/', [SliderController::class, 'add'])->name('dashboard.cms.landing.slider.add');
                    Route::post('/remove', [SliderController::class, 'remove'])->name('dashboard.cms.landing.slider.remove');

                });

                Route::group(['prefix' => 'loan-adviser'], function() {
                    Route::get('/', [LoanAdviserController::class, 'index'])->name('dashboard.cms.landing.loan-adviser');
                    Route::get('/detail/{id}', [LoanAdviserController::class, 'detail'])->name('dashboard.cms.landing.loan-adviser.detail');
                    Route::post('/update/{id}', [LoanAdviserController::class, 'update'])->name('dashboard.cms.landing.loan-adviser.update');
                    Route::post('/', [LoanAdviserController::class, 'add'])->name('dashboard.cms.landing.loan-adviser.add');
                    Route::post('/remove', [LoanAdviserController::class, 'remove'])->name('dashboard.cms.landing.loan-adviser.remove');

                });

                Route::group(['prefix' => 'apply-loan'], function() {
                    Route::get('/', [ApplyLoanController::class, 'index'])->name('dashboard.cms.landing.apply-loan');
                    Route::get('/detail/{id}', [ApplyLoanController::class, 'detail'])->name('dashboard.cms.landing.apply-loan.detail');
                    Route::post('/update/{id}', [ApplyLoanController::class, 'update'])->name('dashboard.cms.landing.apply-loan.update');
                    Route::post('/', [ApplyLoanController::class, 'add'])->name('dashboard.cms.landing.apply-loan.add');
                    Route::post('/remove', [ApplyLoanController::class, 'remove'])->name('dashboard.cms.landing.apply-loan.remove');

                });

                Route::group(['prefix' => 'service'], function() {
                    Route::get('/', [ServiceController::class, 'index'])->name('dashboard.cms.landing.service');
                    Route::get('/detail/{id}', [ServiceController::class, 'detail'])->name('dashboard.cms.landing.service.detail');
                    Route::post('/update/{id}', [ServiceController::class, 'update'])->name('dashboard.cms.landing.service.update');
                    Route::post('/', [ServiceController::class, 'add'])->name('dashboard.cms.landing.service.add');
                    Route::post('/remove', [ServiceController::class, 'remove'])->name('dashboard.cms.landing.service.remove');
                    Route::get('/redirect/{id}', [ServiceController::class, 'redirect'])->name('dashboard.cms.landing.service.redirect');
                });

                Route::group(['prefix' => 'our-team'], function() {
                    Route::get('/{service_id}', [OurTeamController::class, 'index'])->name('dashboard.cms.landing.ourteam');
                    Route::get('/detail/{service_id}/{id}', [OurTeamController::class, 'detail'])->name('dashboard.cms.landing.ourteam.detail');
                    Route::post('/update/{id}', [OurTeamController::class, 'update'])->name('dashboard.cms.landing.ourteam.update');
                    Route::post('/', [OurTeamController::class, 'add'])->name('dashboard.cms.landing.ourteam.add');
                    Route::post('/remove', [OurTeamController::class, 'remove'])->name('dashboard.cms.landing.ourteam.remove');
                    Route::get('/redirect/{id}', [OurTeamController::class, 'redirect'])->name('dashboard.cms.landing.ourteam.redirect');
                });

                Route::group(['prefix' => 'loan-calculator'], function() {
                    Route::get('/{service_id}', [LoanCalculatorController::class, 'index'])->name('dashboard.cms.landing.loan-calculator');
                    Route::get('/detail/{service_id}/{id}', [LoanCalculatorController::class, 'detail'])->name('dashboard.cms.landing.loan-calculator.detail');
                    Route::post('/update/{id}', [LoanCalculatorController::class, 'update'])->name('dashboard.cms.landing.loan-calculator.update');
                    Route::post('/', [LoanCalculatorController::class, 'add'])->name('dashboard.cms.landing.loan-calculator.add');
                    Route::post('/remove', [LoanCalculatorController::class, 'remove'])->name('dashboard.cms.landing.loan-calculator.remove');
                    Route::get('/redirect/{id}', [LoanCalculatorController::class, 'redirect'])->name('dashboard.cms.landing.loan-calculator.redirect');
                });

                Route::group(['prefix' => 'process'], function() {
                    Route::get('/{service_id}', [ProcessController::class, 'index'])->name('dashboard.cms.landing.process');
                    Route::get('/detail/{service_id}/{id}', [ProcessController::class, 'detail'])->name('dashboard.cms.landing.process.detail');
                    Route::post('/update/{id}', [ProcessController::class, 'update'])->name('dashboard.cms.landing.process.update');
                    Route::post('/', [ProcessController::class, 'add'])->name('dashboard.cms.landing.process.add');
                    Route::post('/remove', [ProcessController::class, 'remove'])->name('dashboard.cms.landing.process.remove');
                    Route::get('/redirect/{id}', [ProcessController::class, 'redirect'])->name('dashboard.cms.landing.process.redirect');
                });

                Route::group(['prefix' => 'practive-area'], function() {
                    Route::get('/{service_id}', [PractiveAreaController::class, 'index'])->name('dashboard.cms.landing.practive-area');
                    Route::get('/detail/{service_id}/{id}', [PractiveAreaController::class, 'detail'])->name('dashboard.cms.landing.practive-area.detail');
                    Route::post('/update/{id}', [PractiveAreaController::class, 'update'])->name('dashboard.cms.landing.practive-area.update');
                    Route::post('/', [PractiveAreaController::class, 'add'])->name('dashboard.cms.landing.practive-area.add');
                    Route::post('/remove', [PractiveAreaController::class, 'remove'])->name('dashboard.cms.landing.practive-area.remove');
                    Route::get('/redirect/{id}', [PractiveAreaController::class, 'redirect'])->name('dashboard.cms.landing.practive-area.redirect');
                });

                Route::group(['prefix' => 'practive-area-item'], function() {
                    Route::get('/{practive_area_id}', [PractiveAreaItemController::class, 'index'])->name('dashboard.cms.landing.practive-area-item');
                    Route::get('/detail/{practive_area_id}/{id}', [PractiveAreaItemController::class, 'detail'])->name('dashboard.cms.landing.practive-area-item.detail');
                    Route::post('/update/{id}', [PractiveAreaItemController::class, 'update'])->name('dashboard.cms.landing.practive-area-item.update');
                    Route::post('/', [PractiveAreaItemController::class, 'add'])->name('dashboard.cms.landing.practive-area-item.add');
                    Route::post('/remove', [PractiveAreaItemController::class, 'remove'])->name('dashboard.cms.landing.practive-area-item.remove');
                    Route::get('/redirect/{id}', [PractiveAreaItemController::class, 'redirect'])->name('dashboard.cms.landing.practive-area-item.redirect');
                });

                Route::group(['prefix' => 'service-block'], function() {
                    Route::get('/{service_id}', [ServiceBlockController::class, 'index'])->name('dashboard.cms.landing.service-block');
                    Route::get('/detail/{service_id}/{id}', [ServiceBlockController::class, 'detail'])->name('dashboard.cms.landing.service-block.detail');
                    Route::post('/update/{id}', [ServiceBlockController::class, 'update'])->name('dashboard.cms.landing.service-block.update');
                    Route::post('/', [ServiceBlockController::class, 'add'])->name('dashboard.cms.landing.service-block.add');
                    Route::post('/remove', [ServiceBlockController::class, 'remove'])->name('dashboard.cms.landing.service-block.remove');
                    Route::get('/redirect/{id}', [ServiceBlockController::class, 'redirect'])->name('dashboard.cms.landing.service-block.redirect');
                });

                Route::group(['prefix' => 'about-us'], function() {
                    Route::get('/', [AboutUsController::class, 'show'])->name('dashboard.cms.landing.about-us');
                    Route::post('/{id}', [AboutUsController::class, 'update'])->name('dashboard.cms.landing.about-us.update');

                });

                Route::group(['prefix' => 'change-domain'], function() {
                    Route::get('/', [DomainNameController::class, 'index'])->name('dashboard.cms.landing.domain-name');
                    Route::post('/{id}', [DomainNameController::class, 'update'])->name('dashboard.cms.landing.domain-name.update');
                    Route::post('/', [DomainNameController::class, 'add'])->name('dashboard.cms.landing.domain-name.add');
                });
            });

        });

        Route::group(['prefix' => 'finances'], function () {
            Route::group(['prefix' => 'kyc'], function () {
                Route::get('/', [KYCManagement::class, 'index'])->name('dashboard.kyc.list');
                Route::get('/details', [KYCManagement::class, 'details'])->name('dashboard.kyc.details');
                Route::group(['prefix' => 'verify'], function () {
                    Route::post('all', [KYCVerifyController::class, 'all'])->name('dashboard.kyc.verify.all');
                    Route::post('bank', [KYCVerifyController::class, 'bank'])->name('dashboard.kyc.verify.bank');
                    Route::post('signature', [KYCVerifyController::class, 'signature'])->name('dashboard.kyc.verify.signature');
                    Route::post('identity', [KYCVerifyController::class, 'identity'])->name('dashboard.kyc.verify.identity');
                    Route::post('info', [KYCVerifyController::class, 'info'])->name('dashboard.kyc.verify.info');
                });
            });

            Route::group(['prefix' => 'loan'], function () {
                Route::get('/', [LoanController::class, 'index'])->name('dashboard.loan.list');
                Route::get('/detail/{loanId}', [LoanController::class, 'detail'])->name('dashboard.loan.detail');
                Route::post('/detail/update', [LoanController::class, 'update'])->name('dashboard.loan.detail.update');
            });

            Route::group(['prefix' => 'payer'], function () {
                Route::get('/', [PayerController::class, 'index'])->name('dashboard.payer.list');
                Route::get('/detail/{loanId}', [PayerController::class, 'detail'])->name('dashboard.payer.detail');
                Route::post('/create-bill/', [PayerController::class, 'createPayerBill'])->name('dashboard.payer.create-bill');
            });

            Route::group(['prefix' => 'settings'], function() {
                Route::get('/', [SettingController::class, 'index'])->name('dashboard.setting.list');
                Route::post('/', [SettingController::class, 'update'])->name('dashboard.setting.change');
            });
        });
    });
});
