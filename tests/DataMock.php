<?php

namespace Fusible\Tests;

class DataMock
{
    private $name = 'name';

    private $password = 'password';

    private $number = 0;

    private $blank;

    public function set($name, $value): self
    {
        $this->$name = $value;

        return $this;
    }
}
