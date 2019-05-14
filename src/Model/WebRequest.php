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
 * Class WebRequest
 *
 * @access public
 * @package MartinMulder\InternetNL\Model
 *
 * @Serializer\AccessType("public_method")
 */
class WebRequest extends baseRequest
{
    /**
     * InternetNL domains
     *
     * @var string[]
     * @Serializer\Accessor(getter="getDomains", setter="setDomains")
     * @Serializer\SerializedName("domains")
     * @Serializer\Type("array<string>")
     */
    private $domains;

    /**
     * Constructor
     */
    public function __construct($name, $domains = [])
    {
        parent::__construct($name);
        $this->domains = $domains;
    }

    /**
     * The web request object
     *
     * @return string[]
     */
    public function getDomains()
    {
        return $this->domains;
    }

    /**
     * @param $domains
     *
     * @return $this
     */
    public function setDomains($domains)
    {
        $this->domains = $domains;

        return $this;
    }
}
