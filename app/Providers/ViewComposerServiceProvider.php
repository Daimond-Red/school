<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ViewComposerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer([
            'admin.schools.create',
            'admin.schools.edit',
            'admin.teachers.create',
            'admin.teachers.edit',
        ], function ($view) {

            // $repository = new ItemMasterRepository();

            $collection =  \Spatie\Permission\Models\Permission::all();

            $view->with('permissions', $collection);
        });
    }
}
