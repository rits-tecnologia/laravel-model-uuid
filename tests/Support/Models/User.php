<?php

namespace Rits\Database\Support\Tests\Support\Models;

use Illuminate\Database\Eloquent\Model;
use Rits\Database\Support\GeneratesUuid;

class User extends Model
{
    use GeneratesUuid;
}
