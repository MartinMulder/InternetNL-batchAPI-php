<?php

/**
 * InternetNL-PHP.
 * 
 * This PHP library provides basic access to the InternetNL batch API
 * and is build upon the official API documentation at
 * https://batch.internet.nl/api/batch/documentation
 * 
 * @author Martin <https://github.com/MartinMulder>
 * @license MIT
 */

namespace MartinMulder\InternetNL\Model;

use JMS\Serializer\Annotation as Serializer;

abstract class baseResponse {

	/**
     * Success message as string
     *
     * @var boolean
     * @Serializer\Accessor(getter="getSuccess", setter="setSuccess")
     * @Serializer\SerializedName("success")
     * @Serializer\Type("boolean")
     */
	private $success;

	/**
     * Message as string
     *
     * @var string
     * @Serializer\Accessor(getter="getMessage", setter="setMessage")
     * @Serializer\SerializedName("message")
     * @Serializer\Type("string")
     */
	private $message;

	/**
     * Constructor
     */
    public function __construct()
    {
    }

    /**
     * Success message as boolean.
     *
     * @return boolean
     */
    public function getSuccess()
    {
        return $this->success;
    }

    /**
     * @param $success
     *
     * @return $this
     */
    public function setSuccess($success)
    {
        $this->success = $success;

        return $this;
    }

    /**
     * Message  as string.
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @param $message
     *
     * @return $this
     */
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }
}