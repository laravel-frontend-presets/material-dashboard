<?php

namespace LaravelFrontendPresets\MaterialPreset;

use Illuminate\Support\ServiceProvider;
use Illuminate\Foundation\Console\PresetCommand;

class MaterialPresetServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        PresetCommand::macro('material', function ($command) {
            MaterialPreset::install();
            
            $command->info('Material Dashboard scaffolding installed successfully.');
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
