<?php

/**
 * This file is part of InternetNL-php.
 *
 * (c) MartinMulder <martin@serioussecurity.nl>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace MartinMulder\InternetNL\Exception;

/**
 * Class ApiException
 */
class ApiException extends \RuntimeException
{
    /**
     * @var string
     */
    private $call;

    /**
     * Construct
     */
    public function __construct($message, $call = null, $code = 0, \Exception $previous = null)
    {
        parent::__construct($message, $code, $previous);
        $this->call = $call;
    }

    /**
     * Get the call that caused the exception
     *
     * @return string
     */
    public function getCall()
    {
        return $this->call;
    }
}