<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

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
        /**
         * Laravel 5.4 made a change to the default database character set, and it’s now utf8mb4 which includes support for storing emojis. This only affects new applications and as long as you are running MySQL v5.7.7 and higher you do not need to do anything.
         * For those running MariaDB or older versions of MySQL you may hit this error when trying to run migrations:
         *
         * SQLSTATE[42000]: Syntax error or access violation: 1071 Specified key was too long; max key length is 767 bytes
         *
         * Now this method solves the mentioned problem.
         */

        Schema::defaultStringLength(191);
    }
}
