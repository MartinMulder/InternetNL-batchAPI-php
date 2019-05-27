<?php

namespace MartinMulder\InternetNL;

use JMS\Serializer\SerializerBuilder;

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
final class Request
{
    const API_URL = 'https://batch.internet.nl/api/batch/v1.1';

    /**
     * @var \MartinMulder\InternetNL\Http
     */
    private $http;

    /**
     * @var \JMS\Serializer\SerializerBuilder
     */
    private $serializer;

    /**
     * @var  array
     */
    private static $defaultOptions = array(
        'headers' => array('user-agent' => 'InternetNL-PHP')
    );

    /**
     * Constructor
     */
    public function __construct($options = null)
    {
        $options = array_merge(self::$defaultOptions, $options);
        $this->serializer = SerializerBuilder::create()->build();
        $this->http = new Http($options);
    }

    /**
     * Get PLAIN response.
     * 
     * @param string $call
     * @param array  $parameters
     */
    public function plain($call, $parameters = [])
    {
        try {
            $url = sprintf('%s/%s/', self::API_URL, $call);

            return $this->http->execute($url, $parameters);
        } catch (\Exception $e) {
            throw new Exception\ApiException($e->getMessage(), $url);
        }
    }

     /**
     * Get PLAIN response.
     * 
     * @param string $call
     * @param array  $parameters
     */
    public function plainGET($call, $parameters = [])
    {
        try {
            $url = sprintf('%s/%s/%s/', self::API_URL, $call, implode("", $parameters));

            return $this->http->execute($url);
        } catch (\Exception $e) {
            throw new Exception\ApiException($e->getMessage(), $url);
        }
    }
    
    /**
     * Get API response.
     * 
     * @param string $call
     * @param string $type
     * @param array  $parameters
     */
    public function json($call, $type, $parameters = [])
    {
        try {
            $content = $this->plain($call, $parameters);

            return $this->serializer->deserialize($content, $type, 'json');
        } catch (\Exception $e) {
            throw new Exception\ApiException($e->getMessage(), $call);
        }
    }

    /**
     * Get API response.
     * 
     * @param string $call
     * @param string $type
     * @param array  $parameters
     */
    public function jsonGET($call, $type, $parameters = [])
    {
        try {
            $content = $this->plainGET($call, $parameters);
            return $this->serializer->deserialize($content, $type, 'json');
        } catch (\Exception $e) {
            throw new Exception\ApiException($e->getMessage(), $call);
        }
    }
}
