# [Argon Dashboard 2 Laravel - Free](https://www.creative-tim.com/product/argon-dashboard-laravel)

![version](https://img.shields.io/badge/version-3.0.0-blue.svg) 
![license](https://img.shields.io/badge/license-MIT-blue.svg)
[![GitHub issues open](https://img.shields.io/github/issues/creativetimofficial/argon-dashboard-laravel.svg)](https://github.com/creativetimofficial/argon-dashboard-laravel/issues?q=is%3Aopen+is%3Aissue) 
[![GitHub issues closed](https://img.shields.io/github/issues-closed-raw/creativetimofficial/argon-dashboard-laravel.svg)](https://github.com/creativetimofficial/argon-dashboard-laravel/issues?q=is%3Aissue+is%3Aclosed)

*Frontend version*: Argon Dashboard v3.0.0. More info at https://www.creative-tim.com/product/argon-dashboard
[ <img src="https://s3.amazonaws.com/creativetim_bucket/products/140/original/argon-dashboard-laravel.jpg" width="100%" />](https://argon-dashboard-laravel.creative-tim.com)

Speed up your web development with the Bootstrap 5 Admin Dashboard built for Laravel Framework 9.x and up.

## Table of Contents
* [Prerequisites](#prerequisites)
* [Installation](#installation)
* [Usage](#usage)
* [Versions](#versions)
* [Demo](#demo)
* [Documentation](#documentation)
* [Login](#login)
* [Register](#register)
* [Forgot Password](#forgot-password)
* [Reset Password](#reset-password)
* [User Profile](#user-profile)
* [Dashboard](#dashboard)
* [File Structure](#file-structure)
* [Browser Support](#browser-support)
* [Reporting Issues](#reporting-issues)
* [Licensing](#licensing)
* [Useful Links](#useful-links)
* [Social Media](#social-media)
* [Credits](#credits)

## Prerequisites

If you don't already have an Apache local environment with PHP and MySQL, use one of the following links:

 - Windows: https://updivision.com/blog/post/beginner-s-guide-to-setting-up-your-local-development-environment-on-windows
 - Linux: https://howtoubuntu.org/how-to-install-lamp-on-ubuntu
 - Mac: https://wpshout.com/quick-guides/how-to-install-mamp-on-your-mac/

Also, you will need to install Composer: https://getcomposer.org/doc/00-intro.md   
And Laravel: https://laravel.com/docs/9.x/installation

## Installation

After initializing a fresh instance of Laravel (and making all the necessary configurations), install the preset using one of the provided methods:

### Via composer

1. `Cd` to your Laravel app  
2. Type in your terminal: `composer require laravel/ui`
3. Install this preset via `composer require laravel-frontend-presets/argon`. No need to register the service provider. Laravel 9.x & up can auto detect the package.
4. Run `php artisan ui argon` command to install the Argon preset. This will install all the necessary assets and also the custom auth views, it will also add the auth route in `routes/web.php`
(NOTE: If you run this command several times, be sure to clean up the duplicate Auth entries in routes/web.php)
5. In your terminal run `composer dump-autoload`
6. Run `php artisan migrate:fresh --seed` to create basic users table

### By using the archive

1. In your application's root create a **presets** folder
2. Download the archive of the repo and unzip it
3. Copy and paste the downloaded folder in presets (created in step 2) and rename it to **argon**
4. Open `composer.json` file 
5. Add `"LaravelFrontendPresets\\ArgonPreset\\": "presets/argon/src"` to `autoload/psr-4` and to `autoload-dev/psr-4`
6. Add `LaravelFrontendPresets\ArgonPreset\ArgonPresetServiceProvider::class` to `config/app.php` file
7. Type in your terminal: `composer require laravel/ui`
8. In your terminal run `composer dump-autoload`
9. Run `php artisan ui argon` command to install the Argon preset. This will install all the necessary assets and also the custom auth views, it will also add the auth route in `routes/web.php`
(NOTE: If you run this command several times, be sure to clean up the duplicate Auth entries in routes/web.php)
10. Add in your **.env** file the info for your database
11. Run `php artisan migrate:fresh --seed` to create basic users table
12. Run `npm install perfect-scrollbar`

## Usage
Register a user or login with default user **admin@argon.com** and password **secret** from your database and start testing (make sure to run the migrations and seeders for these credentials to be available).

Besides the dashboard, the auth pages, the billing and table pages, there is also has an edit profile page. All the necessary files are installed out of the box and all the needed routes are added to `routes/web.php`. Keep in mind that all of the features can be viewed once you login using the credentials provided or by registering your own user. 


## Versions

[<img src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/logos/html-logo.jpg" width="60" height="60" />](https://www.creative-tim.com/product/argon-dashboard)
[<img src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/logos/react-logo.jpg" width="60" height="60" />](https://www.creative-tim.com/product/argon-dashboard-react)
[<img src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/logos/vue-logo.jpg" width="60" height="60" />](https://www.creative-tim.com/product/vue-argon-dashboard)
[<img src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/logos/angular-logo.jpg" width="60" height="60" />](https://www.creative-tim.com/product/argon-dashboard-angular)
[<img src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/logos/aspnet-logo.jpg" width="60" height="60" />](https://www.creative-tim.com/product/argon-dashboard-asp-net)
[<img src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/logos/nodejs-logo.jpg" width="60" height="60" />](https://www.creative-tim.com/product/argon-dashboard-nodejs)
[<img src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/logos/laravel_logo.png" width="60" height="60" />](https://www.creative-tim.com/product/argon-dashboard-laravel)



| HTML | Vue | Laravel |
| --- | --- | --- |
| [![Argon Dashboard HTML](https://s3.amazonaws.com/creativetim_bucket/products/96/thumb/argon-dashboard-2.jpg)](https://www.creative-tim.com/product/argon-dashboard) | [![Vue Argon Dashboard ](https://s3.amazonaws.com/creativetim_bucket/products/156/thumb/vue-argon-dashboard.jpg?)](https://www.creative-tim.com/product/vue-argon-dashboard) | [![Argon Dashboard Laravel](https://s3.amazonaws.com/creativetim_bucket/products/140/original/argon-dashboard-laravel.jpg)](https://www.creative-tim.com/product/argon-dashboard-laravel) |


## Demo
| Register | Login | Dashboard |
| --- | --- | ---  |
| [<img src="src/argon-stubs/resources/argon/screens/register.png" width="322" />](https://argon-dashboard-laravel.creative-tim.com/register) | [<img src="src/argon-stubs/resources/argon/screens/login.png" width="322" />](https://argon-dashboard-laravel.creative-tim.com/login)  | [<img src="src/argon-stubs/resources/argon/screens/dashboard.png" width="322" />](https://argon-dashboard-laravel.creative-tim.com/dashboard)

| Forgot Password Page | Reset Password Page | Profile Page  |
| --- | --- | ---  |
| [<img src="src/argon-stubs/resources/argon/screens/reset-password.png" width="322" />](https://argon-dashboard-laravel.creative-tim.com/reset-password)  | [<img src="src/argon-stubs/resources/argon/screens/change-password.png" width="322" />](https://argon-dashboard-laravel.creative-tim.com/login) | [<img src="src/argon-stubs/resources/argon/screens/profile.png" width="322" />](https://argon-dashboard-laravel.creative-tim.com/profile)
[View More](https://www.creative-tim.com/product/argon-dashboard-laravel)

## Documentation
The documentation for the Material Dashboard Laravel is hosted at our [website](https://www.creative-tim.com/product/argon-dashboard-laravel/docs/bootstrap/quick-start/argon-dashboard/index.html).

### Login
If you are not logged in you can only access this page or the Sign Up page. The default url takes you to the login page where you use the default credentials **admin@argon.com** with the password **secret**. Logging in is possible only with already existing credentials. For this to work you should have run the migrations. 

The `App/Http/Controllers/Logincontroller.php` handles the logging in of an existing user.

```
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $request->session()->regenerate();

            return redirect()->intended('dashboard');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }
```

### Register
You can register as a user by filling in the name, email and password for your account. You can do this by accessing the sign up page from the "**Sign Up**" button in the top navbar or by clicking the "**Sign Up**" button from the bottom of the log in form.. Another simple way is adding **/register** in the url.

The `App/Http/Controllers/RegisterController.php` handles the registration of a new user.

```
    public function store()
    {
        $attributes = request()->validate([
            'username' => 'required|max:255|min:2',
            'email' => 'required|email|max:255|unique:users,email',
            'password' => 'required|min:5|max:255',
            'terms' => 'required'
        ]);
        $user = User::create($attributes);
        auth()->login($user);

        return redirect('/dashboard');
    }
```

### Forgot Password
If a user forgets the account's password it is possible to reset the password. For this the user should click on the "**here**" under the login form.

The `App/Http/Controllers/ResetPasswordController.php ` takes care of sending an email to the user where he can reset the password afterwards.

```
    public function send(Request $request)
    {
        $email = $request->validate([
            'email' => ['required']
        ]);
        $user = User::where('email', $email)->first();

        if ($user) {
            $this->notify(new ForgotPassword($user->id));
            return back()->with('succes', 'An email was send to your email address');
        }
    }
```

### Reset Password
The user who forgot the password gets an email on the account's email address. The user can access the reset password page by clicking the button found in the email. The link for resetting the password is available for 12 hours. The user must add the email, the password and confirm the password for his password to be updated.

The `App/Http/Controllers/ChangePasswordController.php` helps the user reset the password.

```
    public function update(Request $request)
    {
        $attributes = $request->validate([
            'email' => ['required'],
            'password' => ['required', 'min:5'],
            'confirm-password' => ['same:password']
        ]);

        $existingUser = User::where('email', $attributes['email'])->first();
        if ($existingUser) {
            $existingUser->update([
                'password' => $attributes['password']
            ]);
            return redirect('login');
        } else {
            return back()->with('error', 'Your email does not match the email who requested the password change');
        }
    }
```

### User Profile
The profile can be accessed by a logged in user by clicking "**Profile**" from the sidebar or adding **/profile** in the url. The user can add information like phone number, location, description or change the name and email.

The `App/Http/Controllers/UserProfileController.php ` handles the user's profile information.

```
        auth()->user()->update([
            'username' => $request->get('username'),
            'firstname' => $request->get('firstname'),
            'lastname' => $request->get('lastname'),
            'email' => config('app.is_demo') ? auth()->user()->email : $request->get('email') ,
            'address' => $request->get('address'),
            'city' => $request->get('city'),
            'country' => $request->get('country'),
            'postal' => $request->get('postal'),
            'about' => $request->get('about')
        ]);
    
}
```

### Dashboard
You can access the dashboard either by using the "**Dashboard**" link in the left sidebar or by adding **/dashboard** in the url after logging in. 

## File Structure
```
 ┣ 📂Console
 ┃ ┗ 📜Kernel.php
 ┣ 📂Exceptions
 ┃ ┗ 📜Handler.php
 ┣ 📂Http
 ┃ ┣ 📂Controllers
 ┃ ┃ ┣ 📜ChangePassword.php
 ┃ ┃ ┣ 📜Controller.php
 ┃ ┃ ┣ 📜HomeController.php
 ┃ ┃ ┣ 📜LoginController.php
 ┃ ┃ ┣ 📜PageController.php
 ┃ ┃ ┣ 📜RegisterController.php
 ┃ ┃ ┣ 📜ResetPassword.php
 ┃ ┃ ┗ 📜UserProfileController.php
 ┃ ┣ 📂Middleware
 ┃ ┃ ┣ 📜Authenticate.php
 ┃ ┃ ┣ 📜EncryptCookies.php
 ┃ ┃ ┣ 📜PreventRequestsDuringMaintenance.php
 ┃ ┃ ┣ 📜RedirectIfAuthenticated.php
 ┃ ┃ ┣ 📜TrimStrings.php
 ┃ ┃ ┣ 📜TrustHosts.php
 ┃ ┃ ┣ 📜TrustProxies.php
 ┃ ┃ ┗ 📜VerifyCsrfToken.php
 ┃ ┗ 📜Kernel.php
 ┣ 📂Models
 ┃ ┗ 📜User.php
 ┣ 📂Notifications
 ┃ ┗ 📜ForgotPassword.php
 ┣ 📂Providers
 ┃ ┣ 📜AppServiceProvider.php
 ┃ ┣ 📜AuthServiceProvider.php
 ┃ ┣ 📜BroadcastServiceProvider.php
 ┃ ┣ 📜EventServiceProvider.php
 ┃ ┗ 📜RouteServiceProvider.php
 ┗ 📂View
 ┃ ┗ 📂Components
 ┃ ┃ ┗ 📜Alert.php
```

## Browser Support
At present, we officially aim to support the last two versions of the following browsers:

<img src="https://s3.amazonaws.com/creativetim_bucket/github/browser/chrome.png" width="64" height="64"> <img src="https://s3.amazonaws.com/creativetim_bucket/github/browser/firefox.png" width="64" height="64"> <img src="https://s3.amazonaws.com/creativetim_bucket/github/browser/edge.png" width="64" height="64"> <img src="https://s3.amazonaws.com/creativetim_bucket/github/browser/safari.png" width="64" height="64"> <img src="https://s3.amazonaws.com/creativetim_bucket/github/browser/opera.png" width="64" height="64">


## Reporting Issues
We use GitHub Issues as the official bug tracker for the Material Dashboard. Here are some advices for our users that want to report an issue:

1. Make sure that you are using the latest version of the Material Dashboard. Check the CHANGELOG from your dashboard on our [website](https://www.creative-tim.com/product/material-dashboard-laravel).
2. Providing us reproducible steps for the issue will shorten the time it takes for it to be fixed.
3. Some issues may be browser specific, so specifying in what browser you encountered the issue might help.


## Licensing
- Copyright 2022 [Creative Tim](https://www.creative-tim.com?ref=readme-md2l)
- Creative Tim [license](https://www.creative-tim.com/license?ref=readme-md2l)

## Useful Links
- [Tutorials](https://www.youtube.com/channel/UCVyTG4sCw-rOvB9oHkzZD1w)
- [Affiliate Program](https://www.creative-tim.com/affiliates/new) (earn money)
- [Blog Creative Tim](http://blog.creative-tim.com/)
- [Free Products](https://www.creative-tim.com/bootstrap-themes/free) from Creative Tim
- [Premium Products](https://www.creative-tim.com/bootstrap-themes/premium?ref=md2l-readme) from Creative Tim
- [React Products](https://www.creative-tim.com/bootstrap-themes/react-themes?ref=md2l-readme) from Creative Tim
- [VueJS Products](https://www.creative-tim.com/bootstrap-themes/vuejs-themes?ref=md2l-readme) from Creative Tim
- [More products](https://www.creative-tim.com/bootstrap-themes?ref=md2l-readme) from Creative Tim
- Check our Bundles [here](https://www.creative-tim.com/bundles??ref=md2l-readme)

### Social Media

### Creative Tim
Twitter: <https://twitter.com/CreativeTim?ref=md2l-readme>

Facebook: <https://www.facebook.com/CreativeTim?ref=md2l-readme>

Dribbble: <https://dribbble.com/creativetim?ref=md2l-readme>

Instagram: <https://www.instagram.com/CreativeTimOfficial?ref=md2l-readme>

### Updivision:

Twitter: <https://twitter.com/updivision?ref=md2l-readme>

Facebook: <https://www.facebook.com/updivision?ref=md2l-readme>

Linkedin: <https://www.linkedin.com/company/updivision?ref=md2l-readme>

Updivision Blog: <https://updivision.com/blog/?ref=md2l-readme>

## Credits

- [Creative Tim](https://creative-tim.com/?ref=md2l-readme)
- [UPDIVISION](https://updivision.com)


