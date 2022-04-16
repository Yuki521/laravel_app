<?php

namespace App\Providers;

use Validator;
use App\Http\Validators\HelloValidator;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class HelloServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
//        View::composer(
//            'hello.index',function ($view){
//                $view->with('view_message','composer message!');
//        }
//        );
//        View::composer(
//            'hello.index','App\Http\Composers\HelloComposer'
//        );
        Validator::extend('hello', function ($attribute, $value, $parameters, $validator) {
            return $value % 2 == 0;
        });
    }
}
