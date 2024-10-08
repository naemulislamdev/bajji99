<?php

use App\Http\Controllers\RegisterController;
use App\Http\Controllers\Auth\SocialAuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\SiteMapController;
use App\Http\Controllers\UserDashboardController;
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

// Language Route
Route::post('/lang', [LanguageController::class, 'index'])->middleware('LanguageSwitcher')->name('lang');
// For Language direct URL link
Route::get('/lang/{lang}', [LanguageController::class, 'change'])->middleware('LanguageSwitcher')->name('langChange');
Route::get('/locale/{lang}', [LanguageController::class, 'locale'])->middleware('LanguageSwitcher')->name('localeChange');
// .. End of Language Route

// No Permission
Route::get('/403', function () {
    return view('errors.403');
})->name('NoPermission');


// Not Found
Route::get('/404', function () {
    return view('errors.404');
})->name('NotFound');

// Backend Routes
Route::get('/login', function () {
    return redirect('/');
});
Route::get('/register', function () {
    return redirect('/');
});

// RSS Feed Routes
if (env("RSS_STATUS", 0)) {
    Route::feeds();
}

// Social Auth
Route::get('/oauth/{driver}', [SocialAuthController::class, 'redirectToProvider'])->name('social.oauth');
Route::get('/oauth/{driver}/callback', [SocialAuthController::class, 'handleProviderCallback'])->name('social.callback');

Route::Group(['prefix' => env('BACKEND_PATH')], function () {
    Auth::routes();
});
Route::get('/logout', function () {
    Auth::logout();
    return redirect('/');
})->name('logout');

// Start of Frontend Routes
// ../site map
Route::get('/sitemap.xml', [SiteMapController::class, 'siteMap'])->name('siteMap');
Route::get('/{lang}/sitemap', [SiteMapController::class, 'siteMap'])->name('siteMapByLang');
Route::get('/', [HomeController::class, 'HomePage'])->name('Home');
Route::get('/cricket', [HomeController::class, 'cricket'])->name('cricket');
Route::get('/casino', [HomeController::class, 'casino'])->name('casino');
Route::get('/sloat', [HomeController::class, 'sloat'])->name('sloat');
Route::get('/tablegames', [HomeController::class, 'tablegames'])->name('tablegames');
Route::get('/sportsbook', [HomeController::class, 'sportsbook'])->name('sportsbook');
Route::get('/fishing', [HomeController::class, 'fishing'])->name('fishing');
Route::get('/crash', [HomeController::class, 'crash'])->name('crash');
Route::get('/promotion', [HomeController::class, 'promotion'])->name('promotion');
Route::get('/vipProfile', [HomeController::class, 'vipProfile'])->name('vipProfile');
Route::get('/login', [HomeController::class, 'login'])->name('front.login');
Route::get('/register', [HomeController::class, 'register'])->name('front.register');
Route::post('/register/store', [RegisterController::class, 'registerStore'])->name('register.store');
Route::get('/logout', [RegisterController::class, 'logout'])->name('user.logout');
Route::post('/login/store', [RegisterController::class, 'loginStore'])->name('login.store');

Route::post('/form-submit', [HomeController::class, 'formSubmit'])->name('formSubmit');
Route::middleware('user','verified')->as('user.')->group(function(){
    Route::get('bank/deposit', [UserDashboardController::class,'deposit'])->name('deposit');
    Route::group([],function(){
        Route::get('profile/personal', [UserDashboardController::class,'profile'])->name('profile');
        Route::post('profile/update/{user}', [UserDashboardController::class,'profileUpdate'])->name('profile.update');
    });

});

// ../home url
Route::get('/home', [HomeController::class, 'HomePage'])->name('HomePage');
Route::get('/{lang?}/home', [HomeController::class, 'HomePageByLang'])->name('HomePageByLang');
// ../subscribe to newsletter submit  (ajax url)
Route::post('/subscribe', [HomeController::class, 'subscribeSubmit'])->name('subscribeSubmit');
// ../Comment submit  (ajax url)
Route::post('/comment', [HomeController::class, 'commentSubmit'])->name('commentSubmit');
// ../Order submit  (ajax url)
Route::post('/order', [HomeController::class, 'orderSubmit'])->name('orderSubmit');
// ..Custom URL for contact us page ( www.site.com/contact )
Route::get('/contact', [HomeController::class, 'ContactPage'])->name('contactPage');
Route::get('/{lang?}/contact', [HomeController::class, 'ContactPageByLang'])->name('contactPageByLang');
// ../contact message submit  (ajax url)
Route::post('/contact/submit', [HomeController::class, 'ContactPageSubmit'])->name('contactPageSubmit');
// ..if page by name ( ex: www.site.com/about )
Route::get('/topic/{id}', [HomeController::class, 'topic'])->name('FrontendPage');
// ..if page by user id ( ex: www.site.com/user )
Route::get('/user/{id}', [HomeController::class, 'userTopics'])->name('FrontendUserTopics');
Route::get('/{lang?}/user/{id}', [HomeController::class, 'userTopicsByLang'])->name('FrontendUserTopicsByLang');
// ../search
Route::get('/search', [HomeController::class, 'searchTopics'])->name('searchTopics');

// ..Topics url  ( ex: www.site.com/news/topic/32 )
Route::get('/{section}/topic/{id}', [HomeController::class, 'topic'])->name('FrontendTopic');
Route::get('/{lang?}/{section}/topic/{id}', [HomeController::class, 'topicByLang'])->name('FrontendTopicByLang');

// ..Sub category url for Section  ( ex: www.site.com/products/2 )
Route::get('/{section}/{cat}', [HomeController::class, 'topics'])->name('FrontendTopicsByCat');
Route::get('/{lang?}/{section}/{cat}', [HomeController::class, 'topicsByLang'])->name('FrontendTopicsByCatWithLang');

// ..Section url by name  ( ex: www.site.com/news )
Route::get('/{section}', [HomeController::class, 'topics'])->name('FrontendTopics');
Route::get('/{lang?}/{section}', [HomeController::class, 'topicsByLang'])->name('FrontendTopicsByLang');

// ..SEO url  ( ex: www.site.com/title-here )
Route::get('/{seo_url_slug}', [HomeController::class, 'SEO'])->name('FrontendSEO');
Route::get('/{lang?}/{seo_url_slug}', [HomeController::class, 'SEOByLang'])->name('FrontendSEOByLang');

// ..if page by name and language( ex: www.site.com/ar/about )
Route::get('/{lang?}/topic/{id}', [HomeController::class, 'topicByLang'])->name('FrontendPageByLang');

// .. End of Frontend Route

