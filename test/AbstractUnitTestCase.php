<?php

namespace Gusdecool\EnvatoSDKTest;

use Doctrine\Common\Annotations\AnnotationRegistry;
use PHPUnit\Framework\TestCase;

abstract class AbstractUnitTestCase extends TestCase
{

    protected function setUp(): void
    {
        parent::setUp();

        AnnotationRegistry::registerLoader('class_exists'); // Load Doctrine annotation
    }
}
