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
 * Class ResultsResponseDomainCategory
 *
 * @access public
 * @package MartinMulder\InternetNL\Model
 *
 * @Serializer\AccessType("public_method")
 */
class ResultsResponseDomainCategory
{
	/**
     * InternetNL response
     *
     * @var string
     * @Serializer\Accessor(getter="getCategory", setter="setCategory")
     * @Serializer\SerializedName("category")
     * @Serializer\Type("string")
     */
	private $category;

    /**
     * InternetNL response
     *
     * @var boolean
     * @Serializer\Accessor(getter="getPassed", setter="setPassed")
     * @Serializer\SerializedName("passed")
     * @Serializer\Type("boolean")
     */
    private $passed;

    /**
     * Results as string.
     *
     * @return string
     */
    public function getCategory(){
        return $this->category;
    }

    /**
     * @param $category
     *
     * @return $this
     */
    public function setCategory($category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Results as boolean.
     *
     * @return boolean
     */
    public function getPassed(){
        return $this->passed;
    }

    /**
     * @param $passed
     *
     * @return $this
     */
    public function setPassed($passed)
    {
        $this->passed = $passed;

        return $this;
    }
}
