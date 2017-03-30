<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewComposerServiceProvider extends ServiceProvider
{
    public function boot()
    {
        View::composer('elements.admintop','App\Http\ViewComposers\AdminComposer');
    }
    public function register()
    {

    }

}
