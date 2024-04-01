<?php

namespace App\Providers;

use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
        \App\Http\Modules\Comments\Events\UserCreatedEvent::class => [
            \App\Http\Modules\Comments\Listeners\UserCreatedListener::class,
        ],
        \App\Http\Modules\Comments\Events\UserEditedEvent::class => [
            \App\Http\Modules\Comments\Listeners\UserEditedListener::class,
        ],
        \App\Http\Modules\Comments\Events\SubAdminCreatedEvent::class => [
            \App\Http\Modules\Comments\Listeners\SubAdminCreatedListener::class,
        ],
        \App\Http\Modules\Comments\Events\SubAdminEditedEvent::class => [
            \App\Http\Modules\Comments\Listeners\SubAdminEditedListener::class,
        ],
        \App\Http\Modules\Comments\Events\SubAdminRoleEvent::class => [
            \App\Http\Modules\Comments\Listeners\SubAdminRoleListener::class,
        ],
        \App\Http\Modules\Comments\Events\AddDemoEvent::class => [
            \App\Http\Modules\Comments\Listeners\AddDemoListener::class,
        ],
        \App\Http\Modules\Comments\Events\EditDemoEvent::class => [
            \App\Http\Modules\Comments\Listeners\EditDemoListener::class,
        ],
        \App\Http\Modules\Comments\Events\AddApplicationEvent::class => [
            \App\Http\Modules\Comments\Listeners\AddApplicationListener::class,
        ],
        \App\Http\Modules\Comments\Events\EditApplicationEvent::class => [
            \App\Http\Modules\Comments\Listeners\EditApplicationListener::class,
        ],
        \App\Http\Modules\Comments\Events\SubAdminDeletedEvent::class => [
            \App\Http\Modules\Comments\Listeners\SubAdminDeletedListener::class,
        ],
        \App\Http\Modules\Comments\Events\UserDeletedEvent::class => [
            \App\Http\Modules\Comments\Listeners\UserDeletedListener::class,
        ],
        \App\Http\Modules\Comments\Events\ApplicationDeletedEvent::class => [
            \App\Http\Modules\Comments\Listeners\ApplicationDeletedListener::class,
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
