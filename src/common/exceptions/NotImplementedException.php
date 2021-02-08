<?php
/**
 * Exception of not implemented functionality
 */

namespace app\src\common\exceptions;

/**
 * Class NotImplementedException
 * @package app\src\common\exceptions
 */
class NotImplementedException extends \Exception
{
    protected $message = 'This functionality is not implemented';
}