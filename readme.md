# Welcome to Material Dashboard FREE Laravel Live Preview

Speed up your web development with the Bootstrap 4 Admin Dashboard built for Laravel Framework 5.5 and up.

*Current version*: Material Dashboard Free Laravel <a href="https://packagist.org/packages/laravel-frontend-presets/material-dashboard"><img src="https://poser.pugx.org/laravel-frontend-presets/material-dashboard/v/stable.svg" alt="Latest Stable Version"></a>

*Frontend version*: Material Dashboard v2.1.1. More info at https://www.creative-tim.com/product/material-dashboard

## Note

We recommend installing this preset on a project that you are starting from scratch, otherwise your project's design might break.

## Prerequisites

If you don't already have an Apache local environment with PHP and MySQL, use one of the following links:

 - Windows: http://tutorial.razi.net.my/search?q=uwamp
 - Linux: https://howtoubuntu.org/how-to-install-lamp-on-ubuntu
 - Mac: https://wpshout.com/quick-guides/how-to-install-mamp-on-your-mac/

Also, you will need to install Composer: https://getcomposer.org/doc/00-intro.md   
And Laravel: https://laravel.com/docs/5.8/installation

## Installation

After initializing a fresh instance of Laravel (and making all the necessary configurations), install the preset using one of the provided methods:

### Via composer

1. `Cd` to your Laravel app  
2. Install this preset via `composer require laravel-frontend-presets/material-dashboard`. No need to register the service provider. Laravel 5.5 & up can auto detect the package.
3. Run `php artisan preset material` command to install the Argon preset. This will install all the necessary assets and also the custom auth views, it will also add the auth route in `routes/web.php`
(NOTE: If you run this command several times, be sure to clean up the duplicate Auth entries in routes/web.php)
4. In your terminal run `composer dump-autoload`
5. Run `php artisan migrate --seed` to create basic users table

### By using the archive

1. In your application's root create a **presets** folder
2. [Download an archive](https://github.com/laravel-frontend-presets/material-dashboard/archive/master.zip) of the repo and unzip it
3. Copy and paste **material-dashboard-master** folder in presets (created in step 2) and rename it to **material**
4. Open `composer.json` file 
5. Add `"LaravelFrontendPresets\\MaterialPreset\\": "presets/material/src"` to `autoload/psr-4` and to `autoload-dev/psr-4`
6. Add `LaravelFrontendPresets\MaterialPreset\MaterialPresetServiceProvider::class` to `config/app.php` file
7. In your terminal run `composer dump-autoload`
8. Run `php artisan preset material` command to install the Material preset. This will install all the necessary assets and also the custom auth views, it will also add the auth route in `routes/web.php`
(NOTE: If you run this command several times, be sure to clean up the duplicate Auth entries in routes/web.php)
9. Run `php artisan migrate --seed` to create basic users table


## Usage

Register a user or login using **admin@material.com** and **secret** and start testing the preset (make sure to run the migrations and seeders for these credentials to be available).

Besides the dashboard and the auth pages this preset also has a user management example and an edit profile page. All the necessary files (controllers, requests, views) are installed out of the box and all the needed routes are added to `routes/web.php`. Keep in mind that all of the features can be viewed once you login using the credentials provided above or by registering your own user. 

### Dashboard

You can access the dashboard either by using the "**Dashboard**" link in the left sidebar or by adding **/home** in the url. 

### Profile edit

You have the option to edit the current logged in user's profile (change name, email and password). To access this page just click the "**User profile**" link in the left sidebar or by adding **/profile** in the url.

The `App\Htttp\Controlers\ProfileController` handles the update of the user information. 

```
public function update(ProfileRequest $request)
{
    auth()->user()->update($request->all());

    return back()->withStatus(__('Profile successfully updated.'));
}
```

Also you shouldn't worry about entering wrong data in the inputs when editing the profile, validation rules were added to prevent this (see `App\Http\Requests\ProfileRequest`). If you try to change the password you will see that other validation rules were added in `App\Http\Requests\PasswordRequest`. Notice that in this file you have a custom validation rule that can be found in `App\Rules\CurrentPasswordCheckRule`.

```
public function rules()
{
    return [
        'old_password' => ['required', 'min:6', new CurrentPasswordCheckRule],
        'password' => ['required', 'min:6', 'confirmed', 'different:old_password'],
        'password_confirmation' => ['required', 'min:6'],
    ];
}
```

### User management

The preset comes with a user management option out of the box. To access this click the "**User Management**" link in the left sidebar or add **/user** to the url.
The first thing you will see is the listing of the existing users. You can add new ones by clicking the "**Add user**" button (above the table on the right). On the Add user page you will see the form that allows you to do this. All pages are generate using blade templates:

```
<div class="row">
  <label class="col-sm-2 col-form-label">{{ __('Name') }}</label>
  <div class="col-sm-7">
    <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
      <input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" id="input-name" type="text" placeholder="{{ __('Name') }}" value="{{ old('name') }}" required="true" aria-required="true"/>
      @if ($errors->has('name'))
        <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('name') }}</span>
      @endif
    </div>
  </div>
</div>
```

Also validation rules were added so you will know exactely what to enter in the form fields (see `App\Http\Requests\UserRequest`). Note that these validation rules also apply for the user edit option.

```
public function rules()
{
    return [
        'name' => [
            'required', 'min:3'
        ],
        'email' => [
            'required', 'email', Rule::unique((new User)->getTable())->ignore($this->route()->user->id ?? null)
        ],
        'password' => [
            $this->route()->user ? 'nullable' : 'required', 'confirmed', 'min:6'
        ]
    ];
}
```

Once you add more users, the list will get bigger and for every user you will have edit and delete options (access these options by clicking the three dotted menu that appears at the end of every line). 

All the sample code for the user management can be found in `App\Http\Controllers\UserController`. See store method example bellow:

```
public function store(UserRequest $request, User $model)
{
    $model->create($request->merge(['password' => Hash::make($request->get('password'))])->all());

    return redirect()->route('user.index')->withStatus(__('User successfully created.'));
}
```

## Change log

Please see the [changelog](changelog.md) for more information on what has changed recently.

## Credits

- [Creative Tim](https://creative-tim.com/)
- [Updivision](https://updivision.com)

## License

[MIT License](https://github.com/laravel-frontend-presets/material-dashboard/blob/master/license.md).

## Screen shots

![Material Login](/screens/Login.png)

![Material Dashboard](/screens/Dashboard.png)

![Material Users](/screens/Users.png)

![Material Profile](/screens/Profile.png)
