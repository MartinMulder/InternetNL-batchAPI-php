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

abstract class baseRequest {

	/**
     * Name message as string
     *
     * @var string
     * @Serializer\Accessor(getter="getName", setter="setName")
     * @Serializer\SerializedName("name")
     * @Serializer\Type("string")
     */
	private $name;

	/**
     * Constructor
     */
    public function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * Name as string.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param $name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }
}