<?php

namespace Guave\TagBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class GuaveTagBundle extends Bundle
{
    public function getPath(): string
    {
        return dirname(__DIR__);
    }
}
