<?php

namespace App\Providers;

use App\Http\Repositories\Auth\AuthInterface;
use App\Http\Repositories\Auth\AuthRepository;
use App\Http\Repositories\Comment\CommentInterface;
use App\Http\Repositories\Comment\CommentRepository;
use App\Http\Repositories\Feedback\FeedbackInterface;
use App\Http\Repositories\Feedback\FeedbackRepository;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use Laravel\Sanctum\Sanctum;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(AuthInterface::class,AuthRepository::class);
        $this->app->bind(FeedbackInterface::class,FeedbackRepository::class);
        $this->app->bind(CommentInterface::class,CommentRepository::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
//        Schema::defaultStringLength(191);
    }
}
