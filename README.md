#Laravel Wincache Driver

## Installation

This repository is to replace the Wincache Cache Driver removed from Laravel 5.2. As such it only works in 5.2 and higher.

```bash
$ composer require wmather/wincache
```

Or a manual update of your composer.json

```json
{
    "require": {
        "wmather/wincache": "^1.0"
    }
}
```

After installing, register the service provider by adding this line to the `providers` array in `config/app.php`.

* `Wmather\WinCache\WinCacheStoreServiceProvider::class`

In your config/cache.php, add a new entry to the `stores` array

```
      'wincache' => [
          'driver' => 'wincache',
      ],
```

And then in your `.env` file, set the CACHE_DRIVER to that alias

```
CACHER_DRIVE=wincache
```