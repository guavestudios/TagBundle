<?php

declare(strict_types=1);

namespace Guave\TagBundle\Tests;

use Guave\TagBundle\GuaveTagBundle;
use PHPUnit\Framework\TestCase;

class GuaveTagBundleTest extends TestCase
{
    public function testCanBeInstantiated(): void
    {
        $bundle = new GuaveTagBundle();

        $this->assertInstanceOf('Guave\TagBundle\GuaveTagBundle', $bundle);
    }
}
