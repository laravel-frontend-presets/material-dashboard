<?php

namespace LaravelFrontendPresets\ArgonPreset;

use Illuminate\Filesystem\Filesystem;
use Laravel\Ui\Presets\Preset;

class ArgonPreset extends Preset
{
    const STUBSPATH = __DIR__.'/argon-stubs/';

    /**
     * Install the preset.
     *
     * @return void
     */
    public static function install()
    {
        static::updateAssets();      
        static::updateAuthViews();
        static::updateComponents();
        static::updateLayoutViews();
        static::addPages();
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
        // public folders
        static::copyDirectory('resources/argon', public_path());

        // js, scss resources that can be run with webpack mix
        static::copyDirectory('resources/assets', app_path('../resources'));
        static::copyFile('webpack.mix.js', app_path('../webpack.mix.js'));
    }

    /**
     * Update the default components files
     *
     * @return void
     */
    protected static function updateComponents()
    {
        // copy components folder
        static::copyDirectory('resources/views/components', resource_path('views/components'));
    }

    /**
     * Update the default layout files
     *
     * @return void
     */
    protected static function updateLayoutViews()
    {
        // copy layouts folder
        static::copyDirectory('resources/views/layouts', resource_path('views/layouts'));
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
        static::copyFile('app/Http/Controllers/HomeController.php', app_path('Http/Controllers/HomeController.php'));
        static::copyFile('app/Http/Controllers/LoginController.php', app_path('Http/Controllers/LoginController.php'));
        static::copyFile('app/Http/Controllers/RegisterController.php', app_path('Http/Controllers/RegisterController.php'));
        static::copyFile('app/Http/Controllers/ChangePassword.php', app_path('Http/Controllers/ChangePassword.php'));
        static::copyFile('app/Http/Controllers/ResetPassword.php', app_path('Http/Controllers/ResetPassword.php'));

        // Add Auth routes in 'routes/web.php'
        file_put_contents(
            './routes/web.php', 
            "\nuse App\Http\Controllers\HomeController;\nuse App\Http\Controllers\PageController;\nuse App\Http\Controllers\RegisterController;\nuse App\Http\Controllers\LoginController;\nuse App\Http\Controllers\UserProfileController;\nuse App\Http\Controllers\ResetPassword;\nuse App\Http\Controllers\ChangePassword;            
            \n\nRoute::get('/', function () {return redirect('/dashboard');})->middleware('auth');\n\tRoute::get('/register', [RegisterController::class, 'create'])->middleware('guest')->name('register');\n\tRoute::post('/register', [RegisterController::class, 'store'])->middleware('guest')->name('register.perform');\n\tRoute::get('/login', [LoginController::class, 'show'])->middleware('guest')->name('login');\n\tRoute::post('/login', [LoginController::class, 'login'])->middleware('guest')->name('login.perform');\n\tRoute::get('/reset-password', [ResetPassword::class, 'show'])->middleware('guest')->name('reset-password');\n\tRoute::post('/reset-password', [ResetPassword::class, 'send'])->middleware('guest')->name('reset.perform');\n\tRoute::get('/change-password', [ChangePassword::class, 'show'])->middleware('guest')->name('change-password');\n\tRoute::post('/change-password', [ChangePassword::class, 'update'])->middleware('guest')->name('change.perform');\n\tRoute::get('/dashboard', [HomeController::class, 'index'])->name('home')->middleware('auth');\n",
            FILE_APPEND
        );

        // Copy argon auth views from the stubs folder
        static::copyDirectory('resources/views/auth', resource_path('views/auth'));
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

        static::copyFile('app/Http/Controllers/PageController.php', app_path('Http/Controllers/PageController.php'));
        static::copyFile('app/Http/Controllers/UserProfileController.php', app_path('Http/Controllers/UserProfileController.php'));

        static::copyDirectory('app/View', app_path('View'));
        static::copyDirectory('app/Notifications', app_path('Notifications'));

        // Add routes
        file_put_contents(
            './routes/web.php', 
            "Route::group(['middleware' => 'auth'], function () {\n\tRoute::get('/virtual-reality', [PageController::class, 'vr'])->name('virtual-reality');\n\tRoute::get('/rtl', [PageController::class, 'rtl'])->name('rtl');\n\tRoute::get('/profile', [UserProfileController::class, 'show'])->name('profile');\n\tRoute::post('/profile', [UserProfileController::class, 'update'])->name('profile.update');\n\tRoute::get('/profile-static', [PageController::class, 'profile'])->name('profile-static'); \n\tRoute::get('/sign-in-static', [PageController::class, 'signin'])->name('sign-in-static');\n\tRoute::get('/sign-up-static', [PageController::class, 'signup'])->name('sign-up-static'); \n\tRoute::get('/{page}', [PageController::class, 'index'])->name('page');\n\tRoute::post('logout', [LoginController::class, 'logout'])->name('logout');\n});",
            FILE_APPEND
        );

        // Copy views
        static::copyDirectory('resources/views/pages', resource_path('views/pages'));
    }
}