<?php
namespace MartinMulder\InternetNL;

use JMS\Serializer\SerializerBuilder;
use MartinMulder\InternetNL\Model\WebRequest;
use MartinMulder\InternetNL\Model\MailRequest;

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
final class Api
{
    /**
     * @var \MartinMulder\InternetNL\Request
     */
    private $request;

    /**
     * @var \JMS\Serializer\SerializerBuilder
     */
    private $serializer;

    /**
     * Constructor
     */
    public function __construct($username = null, $password = null)
    {
        $options = array();
        if ($username && $password) {
            $creds = $username . ":" . $password;
            $options['curl'] = array(CURLOPT_USERPWD => $creds);
        } 

        $this->request = new Request($options);
        $this->serializer = SerializerBuilder::create()->build();
    }
    
    /**
     * API Call: info
     * Should be used to check the availability of the Internet.nl servers, retrieve the engine and criteria version
     * and initialize the maximum number oef concurrent assessments.
     *
     * @return \MartinMulder\InternetNL\Model\Info
     */
    public function info()
    {
        return $this->request->json('info', 'MartinMulder\InternetNL\Model\Info');
    }

    public function web($name, $domains)
    {
        $content = new WebRequest($name, $domains);
        $params = $this->serializer->serialize($content, 'json');
        $response = $this->request->json('web', 'MartinMulder\InternetNL\Model\WebResponse', $params);
        if ($response->getSuccess()) {
            return $response;
        } else {
            throw new Exception\ApiException($response->getMessage(), 'web');
        }
    }

    public function mail($name, $domains)
    {
        $content = new MailRequest($name, $domains);
        $params = $this->serializer->serialize($content, 'json');
        $response = $this->request->json('web', 'MartinMulder\InternetNL\Model\MailResponse', $params);
        if ($response->getSuccess()) {
            return $response;
        } else {
            throw new Exception\ApiException($response->getMessage(), 'web');
        }
    }


    public function results($identifier)
    {
        $arr = array($identifier);
        $response = $this->request->jsonGET('results', 'MartinMulder\InternetNL\Model\ResultsResponse', $arr);
        if ($response->getSuccess()) {
            return $response;
        } else {
            throw new Exception\ApiException($response->getMessage(), 'results');
        }
    }

    public function wrong()
    {
        $response = $this->request->jsonGET('wrong', 'MartinMulder\InternetNL\Model\ResultsResponse');
        if ($response->getSuccess()) {
            return $response;
        } else {
            throw new Exception\ApiException($response->getMessage(), 'results');
        }
    }
}
