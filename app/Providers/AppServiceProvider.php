<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Blade;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     */
    public function boot()
    {

        /*
         * Set variable.
         *
         * Usage: @set($name, value)
         */
        Blade::directive('set', function ($argumentString) {
            list($name, $value) = $this->getArguments($argumentString);

            return "<?php {$name} = {$value}; ?>";
        });


        Blade::directive('csrf', function ($namespace) {
            $namespace = trim(str_replace('\'', '', $namespace)) ?: 'Laravel';
            $csrf = csrf_token();

            $metaTag = "<meta name=\"csrf-token\" content=\"{$csrf}\">";
            $scriptTag = "<script>window.{$namespace} = {'csrfToken': '{$csrf}'}</script>";

            return $metaTag . $scriptTag;
        });


        Blade::directive('js', function ($arguments) {
            list($var, $data) = explode(',', str_replace(['(', ')', ' ', "'"], '', $arguments));
            return "<?php echo \"<script>window['{$var}']= {$data};</script>\" ?>";
        });


        Blade::directive('truncate', function ($expression) {

            list($string, $length) = explode(',', str_replace(['(', ')', ' '], '', $expression));

            return "<?php echo e(strlen({$string}) > {$length} ? substr({$string},0,{$length}).'...' : {$string}); ?>";

        });


        /*
         * Laravel dd() function.
         *
         * Usage: @dd($variableToDump)
         */
        Blade::directive('dd', function ($expression) {
            return "<?php dd(with{$expression}); ?>";
        });

        /*
         * php explode() function.
         *
         * Usage: @explode($delimiter, $string)
         */
        Blade::directive('explode', function ($argumentString) {
            list($delimiter, $string) = $this->getArguments($argumentString);

            return "<?php echo explode({$delimiter}, {$string}); ?>";
        });

        /*
         * php implode() function.
         *
         * Usage: @implode($delimiter, $array)
         */
        Blade::directive('implode', function ($argumentString) {
            list($delimiter, $array) = $this->getArguments($argumentString);

            return "<?php echo implode({$delimiter}, {$array}); ?>";
        });

        /*
         * php var_dump() function.
         *
         * Usage: @var_dump($variableToDump)
         */
        Blade::directive('varDump', function ($expression) {
            return "<?php var_dump(with{$expression}); ?>";
        });
    }

    /**
     * Register any application services.
     *
     * This service provider is a great spot to register your various container
     * bindings with the application. As you can see, we are registering our
     * "Registrar" implementation here. You can add your own bindings too!
     */
    public function register()
    {
        $this->app->bind(
            'Illuminate\Contracts\Auth\Registrar',
            'App\Services\Registrar'
        );
    }
}
