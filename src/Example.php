<?php

namespace StarterTest35;

class Example
{
    public function __construct($parameter)
    {
        $this->parameter = $parameter;
    }

    public function multiply($value)
    {
        return $this->parameter * $value;
    }
}
