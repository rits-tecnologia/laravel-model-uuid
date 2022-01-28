<?php

namespace Rits\Database\Support\Tests;

use Orchestra\Testbench\TestCase as Orchestra;
use Rits\Database\Support\Tests\Support\Migrations\CreateUsersTable;

abstract class TestCase extends Orchestra
{
    public function setUp(): void
    {
        parent::setUp();

        $this->setUpDatabase($this->app);
    }

    /**
     * @param \Illuminate\Foundation\Application $app
     */
    protected function setUpDatabase($app)
    {
        (new CreateUsersTable())->up();
    }
}
