<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to your controller routes.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'App\Http\Controllers';

    /**
     * The path to the "home" route for your application.
     *
     * @var string
     */
    public const HOME = '/home';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        //

        parent::boot();
    }

    /**
     * Define the routes for the application.
     *
     * @return void
     */
    public function map()
    {
        $this->mapApiRoutes();

        $this->mapWebRoutes();

        $this->mapSocioRoutes();

        $this->mapPrestamoRoutes();

        $this->mapContableRoutes();

        $this->mapAdministracionRoutes();

        //
    }


    /**
     * Descripción: Archivo de rutas para módulo socios
     * Entrada/s: 
     * Salida: 
     */
    function mapSocioRoutes()
    {
        Route::middleware('web')
            ->namespace($this->namespace)
            ->group(base_path('routes/socio.php'));
    }

    /**
     * Descripción: Archivo de rutas para módulo prestamos
     * Entrada/s: 
     * Salida: 
     */
    function mapPrestamoRoutes()
    {
        Route::middleware('web')
            ->namespace($this->namespace)
            ->group(base_path('routes/prestamo.php'));
    }

    /**
     * Descripción: Archivo de rutas para módulo contabilidad
     * Entrada/s: 
     * Salida: 
     */
    function mapContableRoutes()
    {
        Route::middleware('web')
            ->namespace($this->namespace)
            ->group(base_path('routes/contable.php'));
    } 

    /**
     * Descripción: Archivo de rutas para módulo administracion
     * Entrada/s: 
     * Salida: 
     */
    function mapAdministracionRoutes()
    {
        Route::middleware('web')
            ->namespace($this->namespace)
            ->group(base_path('routes/administracion.php'));
    } 

    /**
     * Define the "web" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapWebRoutes()
    {
        Route::middleware('web')
            ->namespace($this->namespace)
            ->group(base_path('routes/web.php'));
    }

    /**
     * Define the "api" routes for the application.
     *
     * These routes are typically stateless.
     *
     * @return void
     */
    protected function mapApiRoutes()
    {
        Route::prefix('api')
            ->middleware('api')
            ->namespace($this->namespace)
            ->group(base_path('routes/api.php'));
    }
}
