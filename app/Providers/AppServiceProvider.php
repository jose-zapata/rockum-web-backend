<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use App\View\Composers\SidebarComposer;
use Illuminate\Support\ServiceProvider;
use Lorisleiva\Actions\Facades\Actions;

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
        // Laravel actions register commands
        if ($this->app->runningInConsole()) {
            Actions::registerCommands();
        }
        View::composer('components.sidebar', SidebarComposer::class);
    }
}
