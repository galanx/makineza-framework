<?php

namespace Makineza\Exception;

use Symfony\Component\ErrorHandler\Exception\FlattenException;
use Symfony\Component\HttpFoundation\Response;

class ExceptionHandler
{
    
    public function handle(FlattenException $exception)
    {
        $msg = 'Something went wrong! (' . $exception->getMessage() . ')';
        
        return new Response($msg, $exception->getStatusCode());
    }
}