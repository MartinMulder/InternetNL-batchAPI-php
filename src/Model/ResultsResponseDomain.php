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
class ResultsResponseDomain
{
	/**
     * InternetNL response
     *
     * @var string
     * @Serializer\Accessor(getter="getDomain", setter="setDomain")
     * @Serializer\SerializedName("domain")
     * @Serializer\Type("string")
     */
	private $domain;

    /**
     * InternetNL response
     *
     * @var string
     * @Serializer\Accessor(getter="getStatus", setter="setStatus")
     * @Serializer\SerializedName("status")
     * @Serializer\Type("string")
     */
    private $status;

    /**
     * InternetNL response
     *
     * @var integer
     * @Serializer\Accessor(getter="getScore", setter="setScore")
     * @Serializer\SerializedName("score")
     * @Serializer\Type("integer")
     */
    private $score;

    /**
     * InternetNL response
     *
     * @var string
     * @Serializer\Accessor(getter="getLink", setter="setLink")
     * @Serializer\SerializedName("link")
     * @Serializer\Type("string")
     */
    private $link;

    /**
     * InternetNL response
     *
     * @var MartinMulder\InternetNL\Model\ResultsResponseDomainCategory[]
     * @Serializer\Accessor(getter="getCategories", setter="setCategories")
     * @Serializer\SerializedName("categories")
     * @Serializer\Type("array<MartinMulder\InternetNL\Model\ResultsResponseDomainCategory>")
     */
    private $categories;

    /**
     * InternetNL response
     *
     * @var MartinMulder\InternetNL\Model\ResultsResponseDomainView[]
     * @Serializer\Accessor(getter="getViews", setter="setViews")
     * @Serializer\SerializedName("views")
     * @Serializer\Type("array<MartinMulder\InternetNL\Model\ResultsResponseDomainView>")
     */
    private $views;


    /**
     * Results as string.
     *
     * @return string
     */
    public function getDomain(){
        return $this->domain;
    }

    /**
     * @param $domain
     *
     * @return $this
     */
    public function setDomain($domain)
    {
        $this->domain = $domain;

        return $this;
    }

    /**
     * Results as string.
     *
     * @return string
     */
    public function getStatus(){
        return $this->status;
    }

    /**
     * @param $status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }
  
    /**
     * Results as string.
     *
     * @return string
     */
    public function getScore(){
        return $this->score;
    }

    /**
     * @param $score
     *
     * @return $this
     */
    public function setScore($score)
    {
        $this->score = $score;

        return $this;
    }

    /**
     * Results as string.
     *
     * @return string
     */
    public function getLink(){
        return $this->link;
    }

    /**
     * @param $link
     *
     * @return $this
     */
    public function setLink($link)
    {
        $this->link = $link;

        return $this;
    }

    /**
     * Results as string.
     *
     * @return MartinMuler\InternetNL\Model\ResultsResponseDomainCategory[]
     */
    public function getCategories(){
        return $this->categories;
    }

    /**
     * @param $categories
     *
     * @return $this
     */
    public function setCategories($categories)
    {
        $this->categories = $categories;

        return $this;
    }

   /**
     * Results as string.
     *
     * @return MartinMuler\InternetNL\Model\ResultsResponseDomainView[]
     */
    public function getViews(){
        return $this->views;
    }

    /**
     * @param $views
     *
     * @return $this
     */
    public function setViews($views)
    {
        $this->views = $views;

        return $this;
    }
}
