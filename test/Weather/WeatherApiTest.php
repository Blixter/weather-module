<?php

namespace Blixter\Weather;

use Anax\DI\DIFactoryConfig;
use PHPUnit\Framework\TestCase;

/**
 * Test the SampleController.
 */
class WeatherApiTest extends TestCase
{
    /**
     * Prepare before each test.
     */
    protected function setUp()
    {
        global $di;
        // Set di as global variable
        $this->di = new DIFactoryConfig();
        $di = $this->di;
        $di->loadServices(ANAX_INSTALL_PATH . "/config/di");
        $di->loadServices(ANAX_INSTALL_PATH . "/test/config/di");

        // Get the model from di and set the url for the mock api.
        $this->weather = $di->get("weather");

        // Setup controllerclass
        $this->controller = new WeatherApi();
        $this->controller->setDI($this->di);
    }

    /**
     * Test the route "index".
     */
    public function testIndexActionGetValid()
    {

        $request = $this->di->get("request");
        $url = $this->di->get("url");
        $request->setGet("location", "8.8.8.8");

        $this->weather->setUrl("http://localhost/WeatherModule/a/htdocs/mock?");

        $res = $this->controller->indexActionGet();
        $this->assertIsArray($res);

        $this->assertArrayHasKey("weatherData", $res[0]);
    }

    /**
     * Test the route "index".
     */
    public function testIndexActionGetPast()
    {
        $request = $this->di->get("request");

        $this->weather->setUrl("http://localhost/WeatherModule/a/htdocs/mock/past?");

        $request->setGet("location", "8.8.8.8");
        $request->setGet("period", "past");

        $res = $this->controller->indexActionGet();
        $this->assertIsArray($res);

        $this->assertArrayHasKey("weatherData", $res[0]);
    }
}
