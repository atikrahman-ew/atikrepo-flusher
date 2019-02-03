<?php

/*Remove All Caches To Ashes*/

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Session;

Route::get('/flush', function () {
    Artisan::call('cache:clear');
    Artisan::call('view:clear');
    Artisan::call('route:clear');
    Artisan::call('config:clear');
    Session::flush();
    return("Cleared all Type Of caches to Ashes !");
});
