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

/**
 * Class ResultsResponseDomainView
 *
 * @access public
 * @package MartinMulder\InternetNL\Model
 *
 * @Serializer\AccessType("public_method")
 */
class ResultsResponseDomainView
{
	/**
     * InternetNL response
     *
     * @var string
     * @Serializer\Accessor(getter="getName", setter="setName")
     * @Serializer\SerializedName("name")
     * @Serializer\Type("string")
     */
	private $name;

    /**
     * InternetNL response
     *
     * @var boolean
     * @Serializer\Accessor(getter="getResult  ", setter="setResult")
     * @Serializer\SerializedName("result")
     * @Serializer\Type("boolean")
     */
    private $result;

    /**
     * Results as string.
     *
     * @return string
     */
    public function getName(){
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

    /**
     * Results as boolean.
     *
     * @return boolean
     */
    public function getResult(){
        return $this->result;
    }

    /**
     * @param $result
     *
     * @return $this
     */
    public function setResult($result)
    {
        $this->result = $result;

        return $this;
    }
}