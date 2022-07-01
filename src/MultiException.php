<?php

namespace Profit\MultiExceptions;

class MultiException extends \Exception
{
    private array $exceptions = [];

    public function add(\Exception $exception) {
        $this->exceptions[] = $exception;
    }

    public function all()
    {
        return $this->exceptions;
    }

}