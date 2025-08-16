# Playground Admin

[![Playground CI Workflow](https://github.com/gammamatrix/playground-admin/actions/workflows/ci.yml/badge.svg?branch=develop)](https://raw.githubusercontent.com/gammamatrix/playground-admin/testing/develop/testdox.txt)
[![Test Coverage](https://raw.githubusercontent.com/gammamatrix/playground-admin/testing/develop/coverage.svg)](tests)
[![PHPStan Level 10 src and tests](https://img.shields.io/badge/PHPStan-level%2010-brightgreen)](.github/workflows/ci.yml#L128)

The Playground Admin is a package for [Laravel](https://laravel.com/docs/11.x) applications.

This application provides the models to use Playground Admin, a site administration tool.

Read more on using [Playground Admin at Read the Docs: Playground Documentation.](https://gammamatrix-playground.readthedocs.io/en/develop/components/admin.html)

## Installation

You can install the package via composer:

```bash
composer require gammamatrix/playground-admin
```

## `artisan:about`

Playground Admin provides information in the `artisan about` command.

<!-- <img src="resources/docs/artisan-about-playground-admin.png" alt="screenshot of artisan about command with Playground Admin."> -->

## Configuration

Migrations are disabled by default. This package may sometimes be installed where another system handles the migrations.

See the contents of the published config file: [config/playground-admin.php](config/playground-admin.php)

You can publish the config file with:
```bash
php artisan vendor:publish --provider="Playground\Admin\ServiceProvider" --tag="playground-config"
```

### Environment Variables

|  env()                              | config()                            |
|-------------------------------------|-------------------------------------|
| `PLAYGROUND_ADMIN_LOAD_MIGRATIONS` | `playground-admin.load.migrations` |
- The loading option for migrations does not take effect if the migrations have been exported to your app. The control for loading is handled in the package [ServiceProvider.](src/ServiceProvider.php)

## Models

This package includes [factories](database/factories), models and [migrations](database/migrations) for:
- [Settings](src/Models/Setting.php)

## Migrations

All migrations are disabled by default.

See the contents of the published config file: [database/migrations](database/migrations)
- NOTE: There is 1 table that will be created.

You can publish the migrations file with:
```bash
php artisan vendor:publish --provider="Playground\Admin\ServiceProvider" --tag="playground-migrations"
```

## Cloc

```sh
composer cloc
```

```
➜  playground-admin git:(develop) composer cloc
> cloc --exclude-dir=output,vendor .
      30 text files.
      22 unique files.
       9 files ignored.

github.com/AlDanial/cloc v 1.98  T=0.04 s (492.7 files/s, 37173.0 lines/s)
-------------------------------------------------------------------------------
Language                     files          blank        comment           code
-------------------------------------------------------------------------------
PHP                             14            103            153            708
YAML                             1              5              0            275
XML                              3              0              3            222
JSON                             1              0              0             68
Markdown                         2             39              1             68
INI                              1              3              0             12
-------------------------------------------------------------------------------
SUM:                            22            150            157           1353
-------------------------------------------------------------------------------
```

## PHPStan

Tests at level 9 on:
- `config/`
- `database/`
- `src/`
- `tests/Feature/`
- `tests/Unit/`

```sh
composer analyse
```

## Coding Standards

```sh
composer format
```

## Testing

```sh
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Credits

- [Jeremy Postlethwaite](https://github.com/gammamatrix)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
