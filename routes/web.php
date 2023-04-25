<?php

use App\Http\Controllers\Client\HomeController;
use App\Http\Controllers\Client\KYCController;
use App\Http\Controllers\Client\ProfileController;
use App\Http\Controllers\Client\UploadImageController;
use App\Http\Controllers\Client\UserAuthentication;
use App\Http\Middleware\EnsureMobileDeviceForFinanceSite;
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
Route::get('/', [HomeController::class, 'index'])->name('landing.index');
Route::get('/index.html', [HomeController::class, 'index'])->name('landing.index');

Route::middleware([EnsureMobileDeviceForFinanceSite::class])->group(function() {
    Route::get('login', [ProfileController::class, 'login'])->name('finances.login');
    Route::post('login', [UserAuthentication::class, 'login'])->name('finances.login.submit');
    Route::get('register', [ProfileController::class, 'register'])->name('finances.register');
    Route::post('register', [UserAuthentication::class, 'register'])->name('finances.register.submit');

    Route::get('profile', [ProfileController::class, 'profile'])->name('finances.profile');
    Route::get('information', [ProfileController::class, 'information'])->name('finances.info');

    Route::group(['middleware' => ['auth']], function(){

        Route::get('my-information', [ProfileController::class, 'myInformation'])->name('finances.my-info');
        Route::get('my-loan', [ProfileController::class, 'myLoan'])->name('finances.my-loan');
        Route::get('my-loan/{loanId}', [ProfileController::class, 'myDetailLoan'])->name('finances.my-loan.detail');
        Route::get('my-pay', [ProfileController::class, 'myPay'])->name('finances.my-pay');

        Route::post('confirm-loan', [ProfileController::class, 'confirm'])->name('finances.loan.confirm');
        Route::post('loan', [ProfileController::class, 'applyLoan'])->name('finances.loan.apply');

        Route::group(['prefix' => 'kyc'], function(){
            Route::get('signature', [KYCController::class, 'kycSignature'])->name('finances.kyc.signature');
            Route::post('signature', [KYCController::class, 'signature'])->name('finances.kyc.signature.submit');

            Route::get('information', [KYCController::class, 'kycInfo'])->name('finances.kyc.information');
            Route::post('information', [KYCController::class, 'submitKYCInfo'])->name('finances.kyc.information.submit');

            Route::get('identity', [KYCController::class, 'kycIdentity'])->name('finances.kyc.identity');
            Route::post('images', [UploadImageController::class, 'upload'])->name('finances.kyc.upload');
            Route::post('identity', [KYCController::class, 'submitKYCIdentity'])->name('finances.kyc.identity.submit');

            Route::get('bank', [KYCController::class, 'kycBank'])->name('finances.kyc.bank');
            Route::post('bank', [KYCController::class, 'registerKycBank'])->name('finances.kyc.bank.submit');
        });
    });
});
