<?php

namespace PldPmClienteSimulacionPhp\Client;

use \PldPmClienteSimulacionPhp\Client\Configuration;
use \PldPmClienteSimulacionPhp\Client\ApiException;
use \PldPmClienteSimulacionPhp\Client\ObjectSerializer;

class PLDPersonasMoralesSimulacinApiTest extends \PHPUnit_Framework_TestCase
{
    
    
    
    public function setUp()
    {
        $handler = \GuzzleHttp\HandlerStack::create();
        $config = new \PldPmClienteSimulacionPhp\Client\Configuration();
        $config->setHost('the_url');

        $client = new \GuzzleHttp\Client(['handler' => $handler, 'verify' => false]);
        $this->apiInstance = new \PldPmClienteSimulacionPhp\Client\Api\PLDPersonasMoralesSimulacinApi($client,$config);
    }

    
    public function testGetPLDPm()
    {
        
        $x_api_key = "your_api_key";

        $request = new \PldPmClienteSimulacionPhp\Client\Model\Peticion();
        
        $request->setRazonSocial("EMPRESA SA DE CV");

        try {
            $result = $this->apiInstance->getPLDPm($x_api_key, $request);
            print_r($result);
        } catch (Exception $e) {
            echo 'Exception when calling ApiTest->getPLDPm: ', $e->getMessage(), PHP_EOL;
        }
    }
}
