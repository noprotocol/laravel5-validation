# Laravel 5 custom validation

A way to add custom validation to a laravel 5 project.

## Steps to use

1. Add the `app/Providers/ValidationServiceProvider.php` file to your project
2. Add `App\Providers\ValidationServiceProvider::class` to your `providers` in `config/app.php`
3. Add your custom validation to `app/Providers/ValidationServiceProvider.php`
4. Translate the errors of your custom validation in `resources/lang/en/validation.php`
5. Add your new custom validation in your validation rules (An example in `app/Http/Requests/ExampleRequest.php`)
6. ???
7. Profit

## Current custom validators

1. `dutch_zipcode`, Accepts 1000AA and 1000 AA

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.