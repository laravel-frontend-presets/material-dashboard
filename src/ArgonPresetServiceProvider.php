<?php

namespace LaravelFrontendPresets\ArgonPreset;

use Illuminate\Support\ServiceProvider;
use Laravel\Ui\UiCommand;

class ArgonPresetServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        UiCommand::macro('argon', function ($command) {
            ArgonPreset::install();
            
            $command->info('Argon scaffolding installed successfully.');
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
