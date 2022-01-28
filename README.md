# Laravel Model UUID

This package provides UUID automatic generation for Laravel Models.

## Installation

Install this package with composer.

```sh
composer require rits-tecnologia/laravel-model-uuid
```

## Usage

### Change your migration primary key
```php
// change this
$table->id();

// to this
$table->uuid('id')->primary();

```


### Add trait to your model
```php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use GeneratesUuid;
}

```
