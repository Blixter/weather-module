<?php

namespace Blixter\IpGeolocation;

/**
 *
 * Model for IpGeoController
 */
class IpGeoModel
{
    /**
     *
     *  @var string @apiKey Init the procted API key
     *
     */
    protected $apiKey;
    protected $curlhandler;

    /**
     *
     * Get and Set the API key
     *
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     *
     * Set the curlhandler
     *
     * @return void
     */
    public function setCurl($ch)
    {
        $this->curlhandler = $ch;
    }

    /**
     *
     * Set the ApiKey
     *
     * @return void
     */
    public function setApi($key)
    {
        $this->apiKey = $key;
    }

    /**
     * Send request to Ip stack with given Ip adress
     *
     * @return array with information about the Ip address
     */
    public function fetchData($ipAddress)
    {
        $json = true;

        $url = 'http://api.ipstack.com/' . $ipAddress . '?access_key=' . $this->apiKey;

        $jsonResponse = $this->curlhandler->curl($url, $json);

        // Adding MapLink to the JSON response
        $jsonResponse = $this->addMapLink($jsonResponse);

        return $jsonResponse;
    }

    /**
     * Send request to Ip stack with given Ip adress
     *
     * @return array with information about the Ip address
     */
    public function addMapLink($json)
    {
        $latitude = $json["latitude"];
        $longitude = $json["longitude"];
        $json["mapLink"] = "https://www.openstreetmap.org/#map=13/$latitude/$longitude";

        return $json;
    }

    /**
     * Get ip from $request->getServer
     *
     * @return string with current usrs Ip address
     */
    public function getUserIpAddr($request)
    {
        if (!empty($request->getServer('HTTP_CLIENT_IP'))) {
            //ip from share internet
            $ipAddr = $request->getServer('HTTP_CLIENT_IP');
        } elseif (!empty($request->getServer('HTTP_X_FORWARDED_FOR'))) {
            //ip pass from proxy
            $ipAddr = $request->getServer('HTTP_X_FORWARDED_FOR');
        } else {
            $ipAddr = $request->getServer('REMOTE_ADDR');
        }
        return $ipAddr;
    }
}
