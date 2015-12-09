# Laravel 5 custom validation

A way to add custom validation to a laravel 5 project.

## Steps to use

1. Add the `app/Providers/ValidationServiceProvider.php` file to your project
2. Add `App\Providers\ValidationServiceProvider::class` to your `providers` in `config/app.php`
3. Add your custom validation to `app/Providers/ValidationServiceProvider.php`
4. Translate the errors of your custom validation in `resources/lang/en/validation.php`
5. Add your new custom rules in your validation (for example `app/Http/Requests/ExampleRequest.php`)
6. ???
7. Profit

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.