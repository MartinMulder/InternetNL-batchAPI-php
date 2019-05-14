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
 * Class ResultsResponse
 *
 * @access public
 * @package MartinMulder\InternetNL\Model
 *
 * @Serializer\AccessType("public_method")
 */
class ResultsResponse extends baseResponse
{
    /**
     * InternetNL web response data object.
     *
     * @var MartinMulder\InternetNL\Model\ResultsResponseData
     * @Serializer\Accessor(getter="getData", setter="setData")
     * @Serializer\SerializedName("data")
     * @Serializer\Type("MartinMulder\InternetNL\Model\ResultsResponseData")
     */
    private $data;

    /**
     * Constructor
     */
    public function __construct()
    {
    }

    /**
     * The web response data object
     *
     * @return MartinMulder\InternetNL\Model\ResultsResponseData
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param $data
     *
     * @return $this
     */
    public function setData($data)
    {
        $this->data = $data;

        return $this;
    }
}