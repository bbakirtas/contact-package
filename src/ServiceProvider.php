<?php

namespace YourVendorName\ContactPackage;

use Illuminate\Support\ServiceProvider;

class ContactPackageServiceProvider extends ServiceProvider
{
    /**
     * Paketle ilgili gerekli servisleri kaydeder.
     *
     * @return void
     */
    public function register()
    {
        // Paketle ilgili servisleri burada kaydedebilirsin
    }

    /**
     * Paketle ilgili gerekli işlemleri boot eder.
     *
     * @return void
     */
    public function boot()
    {
        // Paketle ilgili dosyaları Laravel'e yükler
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/resources/views', 'contact');
    }
}
