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
        Blade::directive('datetime', function ($expression) {
            return "<?php echo '测试模板成功'; ?>";
        });
    }
}


