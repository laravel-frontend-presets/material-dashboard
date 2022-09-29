<?php

namespace LaravelFrontendPresets\MaterialPreset;

use Illuminate\Filesystem\Filesystem;
use Laravel\Ui\Presets\Preset;

class MaterialPreset extends Preset
{
    const STUBSPATH = __DIR__.'/material-stubs/';

    /**
     * Install the preset.
     *
     * @return void
     */
    public static function install()
    {
        static::updateAssets();
        static::updateWelcomePage();
        static::updateAuthViews();
        static::addComponents();
        static::addPages();
    }

    /**
     * Delete a resource
     *
     * @param string $resource
     * @return void
     */
    private static function deleteResource($resource)
    {
        (new Filesystem)->delete(resource_path($resource));
    }

    /**
     * Copy a file
     *
     * @param string $file
     * @param string $destination
     * @return void
     */
    private static function copyFile($file, $destination)
    {
        (new Filesystem)->copy(static::STUBSPATH.$file, $destination);
    }

    /**
     * Copy a directory
     *
     * @param string $directory
     * @param string $destination
     * @return void
     */
    private static function copyDirectory($directory, $destination)
    {
        (new Filesystem)->copyDirectory(static::STUBSPATH.$directory, $destination);
    }

    /**
     * Update the assets
     *
     * @return void
     */
    protected static function updateAssets()
    {
        // public assets
        static::copyDirectory('resources/material', public_path());

        // js, css in resources
        static::copyDirectory('resources/assets', app_path('../resources'));
        static::copyFile('webpack.mix.js', app_path('../webpack.mix.js'));
    }

    /**
     * Update the default welcome page file.
     *
     * @return void
     */
    protected static function updateWelcomePage()
    {
        // remove default welcome page
        static::deleteResource(('views/welcome.blade.php'));

        // copy new one from your stubs folder
        static::copyFile('resources/views/welcome.blade.php', resource_path('views/welcome.blade.php'));
    }

    /**
     * Update the default layout files
     *
     * @return void
     */
    protected static function addComponents()
    {
        // copy new one from your stubs folder
        static::copyDirectory('resources/views/components', resource_path('views/components'));
    }

    /**
     * Copy Auth view templates.
     *
     * @return void
     */
    protected static function updateAuthViews()
    {
        // Add auth controllers
        static::copyFile('app/Models/User.php', app_path('Models/User.php'));
        static::copyFile('app/Http/Controllers/DashboardController.php', app_path('Http/Controllers/DashboardController.php'));
        static::copyFile('app/Http/Controllers/ProfileController.php', app_path('Http/Controllers/ProfileController.php'));
        static::copyFile('app/Http/Controllers/RegisterController.php', app_path('Http/Controllers/RegisterController.php'));
        static::copyFile('app/Http/Controllers/SessionsController.php', app_path('Http/Controllers/SessionsController.php'));

        // Add Auth routes in 'routes/web.php'
        file_put_contents(
            './routes/web.php',
            "\nuse App\Http\Controllers\DashboardController;\nuse App\Http\Controllers\ProfileController;\nuse App\Http\Controllers\RegisterController;\nuse App\Http\Controllers\SessionsController;
            \n\nRoute::get('/', function () {return redirect('sign-in');})->middleware('guest');\nRoute::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth')->name('dashboard');\nRoute::get('sign-up', [RegisterController::class, 'create'])->middleware('guest')->name('register');\nRoute::post('sign-up', [RegisterController::class, 'store'])->middleware('guest');\nRoute::get('sign-in', [SessionsController::class, 'create'])->middleware('guest')->name('login');\nRoute::post('sign-in', [SessionsController::class, 'store'])->middleware('guest');\nRoute::post('verify', [SessionsController::class, 'show'])->middleware('guest');\nRoute::post('reset-password', [SessionsController::class, 'update'])->middleware('guest')->name('password.update');\nRoute::get('verify', function () {\n\treturn view('sessions.password.verify');\n})->middleware('guest')->name('verify'); \nRoute::get('/reset-password/{token}', function ("."$"."token) {\n\treturn view('sessions.password.reset', ['token' => "."$"."token]);\n})->middleware('guest')->name('password.reset');",
            FILE_APPEND
        );

        // Copy argon auth views from the stubs folder
        static::copyDirectory('resources/views/register', resource_path('views/register'));
        static::copyDirectory('resources/views/sessions', resource_path('views/sessions'));
        static::copyDirectory('resources/views/dashboard', resource_path('views/dashboard'));
    }

    /**
     * Copy user management and profile edit files
     *
     * @return void
     */
    public static function addPages()
    {
        // Add seeder, controllers, requests and rules
        // migrations shoudl be deleted
        static::copyDirectory('migrations', app_path('../database/migrations'));
        static::copyDirectory('database/seeders', app_path('../database/seeders'));

        // Add routes
        file_put_contents(
            './routes/web.php',
            "\n\nRoute::post('sign-out', [SessionsController::class, 'destroy'])->middleware('auth')->name('logout');\nRoute::get('profile', [ProfileController::class, 'create'])->middleware('auth')->name('profile');\nRoute::post('user-profile', [ProfileController::class, 'update'])->middleware('auth');\nRoute::group(['middleware' => 'auth'], function () {\n\tRoute::get('billing', function () {\n\t\treturn view('pages.billing');\n\t})->name('billing');\n\tRoute::get('tables', function () {\n\t\treturn view('pages.tables');\n\t})->name('tables');\n\tRoute::get('rtl', function () {\n\t\treturn view('pages.rtl');\n\t})->name('rtl');\n\tRoute::get('virtual-reality', function () {\n\t\treturn view('pages.virtual-reality');\n\t})->name('virtual-reality');\n\tRoute::get('notifications', function () {\n\t\treturn view('pages.notifications');\n\t})->name('notifications');\n\tRoute::get('static-sign-in', function () {\n\t\treturn view('pages.static-sign-in');\n\t})->name('static-sign-in');\n\tRoute::get('static-sign-up', function () {\n\t\treturn view('pages.static-sign-up');\n\t})->name('static-sign-up');\n\tRoute::get('user-management', function () {\n\t\treturn view('pages.laravel-examples.user-management');\n\t})->name('user-management');\n\tRoute::get('user-profile', function () {\n\t\treturn view('pages.laravel-examples.user-profile');\n\t})->name('user-profile');\n});",
            FILE_APPEND
        );

        // Copy pages
        static::copyDirectory('resources/views/pages', resource_path('views/pages'));
    }
}
