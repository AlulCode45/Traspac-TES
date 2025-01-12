<?php

namespace App\Providers;

use App\Contracts\Interfaces\JabatanInterface;
use App\Contracts\Interfaces\KaryawanInterface;
use App\Contracts\Interfaces\UnitKerjaInterface;
use App\Contracts\Repository\JabatanRepository;
use App\Contracts\Repository\KaryawanRepository;
use App\Contracts\Repository\UnitKerjaRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{

    private array $registers = [
        KaryawanInterface::class => KaryawanRepository::class,
        UnitKerjaInterface::class => UnitKerjaRepository::class,
        JabatanInterface::class => JabatanRepository::class
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
