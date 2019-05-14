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
 * Class ResultsResponseDomainCategorie
 *
 * @access public
 * @package MartinMulder\InternetNL\Model
 *
 * @Serializer\AccessType("public_method")
 */
class ResultsResponseDomainCategorie
{
	/**
     * InternetNL response
     *
     * @var string
     * @Serializer\Accessor(getter="getCategorie", setter="setCategorie")
     * @Serializer\SerializedName("categorie")
     * @Serializer\Type("string")
     */
	private $categorie;

    /**
     * InternetNL response
     *
     * @var boolean
     * @Serializer\Accessor(getter="getPsased  ", setter="setPassed")
     * @Serializer\SerializedName("passed")
     * @Serializer\Type("boolean")
     */
    private $passed;

    /**
     * Results as string.
     *
     * @return string
     */
    public function getCategorie(){
        return $this->categorie;
    }

    /**
     * @param $categorie
     *
     * @return $this
     */
    public function setCategorie($categorie)
    {
        $this->categorie = $categorie;

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