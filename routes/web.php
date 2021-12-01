<?php

use App\Http\Controllers\NewsController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::prefix('technology')->group(function () {

    Route::get('layer-1-capabilities', function () {
        return view('technology-capabilities');
    })->name('technology.capabilities');

    Route::get('core-protocol', function () {
        return view('technology-protocol');
    })->name('technology.protocol');

    Route::get('research', function () {
        return view('technology-research');
    })->name('technology.research');

    Route::get('native-coin', function () {
        return view('technology-coin');
    })->name('technology.coin');
});

Route::prefix('ecosystem')->group(function () {

    Route::get('testnet', function () {
        return view('ecosystem-testnet');
    })->name('ecosystem.testnet');

    Route::get('mainnet', function () {
        return view('ecosystem-mainnet');
    })->name('ecosystem.mainnet');

    Route::get('cmc-wallets', function () {
        return view('ecosystem-wallet');
    })->name('ecosystem.wallet');

    Route::get('wowidex', function () {
        return view('ecosystem-wowidex');
    })->name('ecosystem.wowidex');
});

Route::prefix('resource')->group(function () {

    Route::get('community', function () {
        return view('resource-community');
    })->name('resource.community');

    Route::get('documentations', function () {
        return view('resource-documentations');
    })->name('resource.documentations');

    Route::get('brand-kit', function () {
        return view('resource-brand-kit');
    })->name('resource.brandkit');

    Route::get('blog', function () {
        return view('resource-blog');
    })->name('resource.blog');

    Route::get('white-paper', function () {
        return view('resource-white-paper');
    })->name('resource.whitepaper');

    Route::get('smart-contract', function () {
        return view('resource-smart-contract');
    })->name('resource.smartcontract');
});

Route::prefix('company')->group(function () {
    Route::get('technical-advisory-board', function () {
        return view('company-advisor');
    })->name('company.advisor');
});

Auth::routes();

Route::middleware('auth')->prefix('admin')->group(function () {
    Route::get('/', 'HomeController@index')->name('admin.index');
    Route::get('/news/toggle/{news}', [NewsController::class, 'toggle'])->name('news.toggle');
    Route::post('/news/image', [NewsController::class, 'imageUpload'])->name('news.image.upload');
    Route::resource('/news', 'NewsController');
});
