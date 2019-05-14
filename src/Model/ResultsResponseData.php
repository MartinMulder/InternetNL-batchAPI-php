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
 * Class ResultsResponseData
 *
 * @access public
 * @package MartinMulder\InternetNL\Model
 *
 * @Serializer\AccessType("public_method")
 */
class ResultsResponseData
{

    /**
     * InternetNL response
     *
     * @var string
     * @Serializer\Accessor(getter="getSubmissiondate", setter="setSubmissiondate")
     * @Serializer\SerializedName("submission-date")
     * @Serializer\Type("string")
     */
    private $submissiondate;

    /**
     * InternetNL response
     *
     * @var string
     * @Serializer\Accessor(getter="getsFinisheddate", setter="setFinisheddate")
     * @Serializer\SerializedName("finished-date")
     * @Serializer\Type("string")
     */
    private $finisheddate;

    /**
     * InternetNL response
     *
     * @var string
     * @Serializer\Accessor(getter="getIdentifier", setter="setIdentifier")
     * @Serializer\SerializedName("identifier")
     * @Serializer\Type("string")
     */
    private $identifier;

    /**
     * InternetNL response
     *
     * @var string
     * @Serializer\Accessor(getter="getApiversion", setter="setApiversion")
     * @Serializer\SerializedName("api-version")
     * @Serializer\Type("string")
     */
    private $apiversion;

    /**
     * InternetNL domains
     *
     * @var MartinMulder\InternetNL\Model\ResultsResponseDomain[]
     * @Serializer\Accessor(getter="getDomains", setter="setDomains")
     * @Serializer\SerializedName("domains")
     * @Serializer\Type("array<MartinMulder\InternetNL\Model\ResultsResponseDomain>")
     */
    private $domains;

    /**
     * @param $submissiondate
     *
     * @return $this
     */
    public function setSubmissiondate($submissiondate)
    {
        $this->submissiondate = $submissiondate;

        return $this;
    }

	/**
     * Results as string.
     *
     * @return DateTime
     */
    public function getSubmissiondate() {
        return $this->submissiondate;
    }
 
    /**
     * Results as string.
     *
     * @return DateTime
     */
    public function getFinisheddate() {
        return $this->finisheddate;
    }

    /**
     * @param $finisheddate
     *
     * @return $this
     */
    public function setFinisheddate($finisheddate)
    {
        $this->finisheddate = $finisheddate;

        return $this;
    }

    /**
     * Results as string.
     *
     * @return string
     */
    public function getIdentifier() {
        return $this->identifier;
    }

    /**
     * @param $identifier
     *
     * @return $this
     */
    public function setIdentifier($identifier)
    {
        $this->identifier = $identifier;

        return $this;
    }
    
    /**
     * Results as string.
     *
     * @return string
     */
    public function getApiversion() {
        return $this->apiversion;
    }

    /**
     * @param $apiversion
     *
     * @return $this
     */
    public function setApiversion($apiversion)
    {
        $this->apiversion = $apiversion;

        return $this;
    }

    /**
     * Results as string.
     *
     * @return string[]
     */
    public function getDomains() {
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