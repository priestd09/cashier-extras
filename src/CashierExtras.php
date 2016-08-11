<?php

namespace Travoltron\CashierExtras;

use Illuminate\Support\ServiceProvider;

class CashierExtrasServiceProvider extends ServiceProvider
{
    protected $commands = [
        'Travoltron\CashierExtras\Commands\CreateCoupon',
        'Travoltron\CashierExtras\Commands\MakeTestable',
        // 'Travoltron\CashierExtras\Commands\FooCommand',
        // 'Travoltron\CashierExtras\Commands\BarCommand',
    ];
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        $this->commands($this->commands);
    }

    /**
     * @return void
     */
    public function register()
    {
        // 
    }
}