<?php

namespace Gusdecool\EnvatoSDKTest;

use Dotenv\Dotenv;
use PHPUnit\Framework\TestCase;

abstract class AbstractUnitTestCase extends TestCase
{

    protected function setUp(): void
    {
        parent::setUp();

        $dotenv = Dotenv::createImmutable(__DIR__ . '/../');
        $dotenv->load();
    }
}
