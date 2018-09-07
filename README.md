# Wildside/MailgunEu

Provides a replacement `MailServiceProvider` in Laravel which requires setting the full Mailgun base URL.

## Requirements

* This package requires PHP 5.6+
* It works with Laravel 5.x (and may work with earlier versions too).
* It does not work with Laravel 5.7 (or newer) as native support for the EU endpoint is available.

## Installation

Require this package with composer

````
composer require wildside/mailguneu
````

Replace your `MailServiceProvider` in `config/app.php`.

```php
// Illuminate\Mail\MailServiceProvider::class,
Wildside\MailgunEu\MailServiceProvider::class,
```

Update your `mailgun.domain` value in `config/services.php` to provide the full API URL (e.g. https://api.mailgun.net/v3/mg.example.org instead of mg.example.org)

## License

This open-source software is licensed under the [MIT license](https://opensource.org/licenses/MIT).
