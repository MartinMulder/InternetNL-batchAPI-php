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
 * Class MailResponse
 *
 * @access public
 * @package MartinMulder\InternetNL\Model
 *
 * @Serializer\AccessType("public_method")
 */
class MailResponse extends baseResponse
{
    /**
     * InternetNL web response data object.
     *
     * @var MartinMulder\InternetNL-php\Model\WebResponseData
     * @Serializer\Accessor(getter="getData", setter="setData")
     * @Serializer\SerializedName("data")
     * @Serializer\Type("MartinMulder\InternetNL\Model\WebResponseData")
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
     * @return MartinMulder\InternetNL-php\Model\WebResponseData
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
