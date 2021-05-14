<?php

namespace LaravelFrontendPresets\MaterialPreset;

use Illuminate\Support\ServiceProvider;
use Illuminate\Foundation\Console\PresetCommand;
use Laravel\Ui\UiCommand;
use Laravel\Ui\AuthCommand;

class MaterialPresetServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        UiCommand::macro('material', function ($command) {
            MaterialPreset::install();

            $command->info('Material Dashboard scaffolding installed successfully.');
        });

        if($this->app->runningInConsole()) {
            $this->registerPublishing();
        }
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    protected function registerPublishing() {
        $this->publishes([
            __DIR__.'/material-stubs/resources/assets/scss' => resource_path('sass'),
            __DIR__.'/material-stubs/resources/assets/js' => resource_path('js'),
            __DIR__.'/material-stubs/resources/assets/css' => resource_path('css'),
            __DIR__.'/material-stubs/resources/assets/img' => public_path('material/img')
        ], 'material-sass');
    }
}
