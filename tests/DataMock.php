<?php

namespace Fusible\Tests;

class DataMock
{
    private $name;

    private $password;

    private $number = 0;

    private $blank;

    public function set($name, $value): self
    {
        $this->$name = $value;

        return $this;
    }
}
