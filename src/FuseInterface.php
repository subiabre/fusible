<?php

namespace Fuse;

use Respect\Validation\Validator;

interface FuseInterface
{
    public function load(): Validator;
}
