<?php

namespace Rits\Database\Support\Tests\Unit;

use Rits\Database\Support\Tests\Support\Models\User;
use Rits\Database\Support\Tests\TestCase;

class UserTest extends TestCase
{
    public function testItCanCreateUserWithUuid()
    {
        $user = new User();
        $user->name = 'John Doe';
        $user->email = 'john@doe.com';
        $user->password = bcrypt('password');

        $user->save();

        $this->assertNotNull($user->id);
        $this->assertIsString($user->id);
        $this->assertStringMatchesFormat('%s-%s-%s-%s-%s', $user->id);
    }
}
