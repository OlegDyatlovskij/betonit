<?php
namespace App\Exceptions;

use Exception;

class MyException extends Exception
{
    protected $errorMessage;
    public function __construct($message, $code = 0, Exception $previous = null)
    {
        $this->errorMessage = $message;
        parent::__construct($message, $code, $previous);
    }
    public function getErrorMessage()
    {
        return $this->errorMessage;
    }
}
?>