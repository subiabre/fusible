<?php

namespace Fusible\Tests;

class DataMock
{
    private $name = 'name';

    private $password = 'password';

    private $number = 0;

    private $blank;

    public function setBlank($blank): self
    {
        $this->blank = $blank;

        return $this;
    }
}
