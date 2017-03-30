<?php

namespace App\Providers;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
class BladeServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->bladeDirectives();
    }
    public function register()
    {

    }
    private function bladeDirectives()
    {
        // Call to Entrust::can
        \Blade::directive('permission', function($expression) {
            /* $guard = \Config::get('entrust.exguard'); */
            /* return "<?php if (\\Auth::guard('{$guard}')->user()->can{$expression}) : ?>"; */
            return "<?php if (\\Auth::guard()->user()->can($expression)) : ?>";
        });

        \Blade::directive('endpermission', function($expression) {
            return "<?php endif; // Entrust::can ?>";
        });
    }
}


