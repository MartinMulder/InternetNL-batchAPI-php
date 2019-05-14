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
 * Class WebResponse
 *
 * @access public
 * @package MartinMulder\InternetNL\Model
 *
 * @Serializer\AccessType("public_method")
 */
class WebResponseData
{
	/**
     * InternetNL response
     *
     * @var string
     * @Serializer\Accessor(getter="getResults", setter="setResults")
     * @Serializer\SerializedName("results")
     * @Serializer\Type("string")
     */
	private $results;

	/**
     * Results as string.
     *
     * @return string
     */
    public function getResults()
    {
        return $this->results;
    }

    /**
     * @param $results
     *
     * @return $this
     */
    public function setResults($results)
    {
        $this->results = $results;

        return $this;
    }
}