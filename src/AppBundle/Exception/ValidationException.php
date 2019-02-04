<?php
/**
 * Created by PhpStorm.
 * User: mohamed
 * Date: 04/02/19
 * Time: 09:42 ص
 */

namespace AppBundle\Exception;

class ValidationException extends \Exception
{

    protected $errors = [];
    protected $message = 'failed to insure validation constraint';

    /**
     * @var \Iterator $errorIterator
     */
    protected $errorIterator;

    /**
     * validationException constructor.
     * @param \Iterator $errorIterator
     */
    public function __construct(\Iterator $errorIterator)
    {
        parent::__construct();
        $this->errorIterator = $errorIterator;
    }

    /**
     * @return \Iterator
     */
    public function getErrorIterator()
    {
        return $this->errorIterator;
    }

    /**
     * @param \Iterator $errorIterator
     * @return validationException
     */
    public function setErrorIterator($errorIterator)
    {
        $this->errorIterator = $errorIterator;
        return $this->setErrors(iterator_to_array($errorIterator));
    }


    /**
     * @return array
     */
    public function getErrors()
    {
        return $this->errors;
    }

    /**
     * @param array $errors
     * @return validationException
     */
    public function setErrors($errors)
    {
        $this->errors = $errors;
        return $this;
    }
}
