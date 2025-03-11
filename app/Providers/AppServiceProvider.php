<?php

namespace App\Providers;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;
use App\Models\Event;
use Illuminate\Support\Facades\View;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Paginator::useBootstrap();
    
    // Fetch only 2 latest events and share globally
    View::composer('*', function ($view) {
        $footerEvents = Event::latest()->take(2)->get(); // Only fetch 2 events
        $view->with('footerEvents', $footerEvents);
    });
}

}
