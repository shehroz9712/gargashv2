<?php

namespace App\Providers;

use App\Models\DailyBalance;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        try {
            $dailyBalance = DailyBalance::where('status', 'open')->first();


            View::share(['dailyBalance' => $dailyBalance]);
        } catch (QueryException $e) {
            $dailyBalance = new dailyBalance();
            View::share(['dailyBalance' => $dailyBalance]);
        }
    }
}
