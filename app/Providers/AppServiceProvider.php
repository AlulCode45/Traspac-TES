<?php

namespace App\Providers;

use App\Contracts\Repository\Interfaces\KaryawanInterface;
use App\Contracts\Repository\Repository\KaryawanRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{

    private array $registers = [
      KaryawanInterface::class => KaryawanRepository::class
    ];

    /**
     * Register any application services.
     */
    public function register(): void
    {
        foreach ($this->registers as $interface => $repository) {
            $this->app->bind($interface, $repository);
        }
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
