<?php

namespace LaravelFrontendPresets\MaterialPreset;

use Illuminate\Support\ServiceProvider;
use Laravel\Ui\UiCommand;

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
            
            $command->info('Material scaffolding installed successfully.');
        });
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
}
