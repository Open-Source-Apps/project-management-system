<?php

namespace Mage2\Project;

use Mage2\Framework\Support\BaseModule;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;


class Module extends BaseModule {

   

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot() {
        //$this->registerPolicies();
    }

    /**
     * Define the routes for the application.
     *
     * @return void
     */
    public function register() {
        //$this->mapApiRoutes();
        $this->mapWebRoutes();
        $this->registerViewPath();
        //
    }

    /**
     * Define the "web" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapWebRoutes() {
        require __DIR__ . '/routes/web.php';
    }

    /**
     * Define the "web" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function registerViewPath() {
        View::addLocation(__DIR__ . "/views");
    }

    public function registerPolicies() {
        foreach ($this->policies as $key => $value) {
            Gate::policy($key, $value);
        }
    }

}
