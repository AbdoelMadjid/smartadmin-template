<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\AppProfile;

class AppProfileProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        View::composer('*', function ($view) {
            $profileApp = AppProfile::first(); // Ubah sesuai dengan logika pengambilan data yang sesuai
            $view->with('profileApp', $profileApp);
        });
    }
}
