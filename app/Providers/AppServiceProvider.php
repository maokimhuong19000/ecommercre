<?php

namespace App\Providers;

use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

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
        Schema::defaultStringLength(191);
        // try{
        //         DB::connection()->getPDO();
        //         dump('Database is Connected. Database Name is :'.DB::connection()->getDatabaseName());
        // }catch(Exception $e){
        //         dump('Database Connection Filed');
        // }
    }
}
