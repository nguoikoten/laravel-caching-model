<?php

namespace chilltvpack\CachingModel\Exceptions;

use Exception;

class UnsupportedModelException extends Exception
{
    public function __construct($message = 'Model does not implement Cacheable interface yet.')
    {
        parent::__construct($message);
    }
}
