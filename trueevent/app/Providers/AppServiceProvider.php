<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\ServiceCategory;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
      
        View::composer('*', function ($view) {
        $categories = ServiceCategory::with('subCategories')
            ->where('status', 1)
            ->get();

        $view->with('categories', $categories);
    });
    }
}
