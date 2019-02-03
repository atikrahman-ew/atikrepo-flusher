## Laravel 5 AUTOMATIC FLUSH CLEANER


### Install

Require this package with composer using the following command:

```bash
composer require "atikrepo/flusher @dev"
```

After updating composer, add the service provider to the `providers` array in `config/app.php`

```php
  \atikrepo\flusher\LaravelFlushServiceProvider::class,
```

This will allow your application to load the Laravel Cache Cleaner Url.

### Usage

Hit Your BaseUrl/flush It Will Clean cache/session/view cache/config files and run smothly .


### License

The Laravel 5 AUTOMATIC FLUSH CLEANER is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)

