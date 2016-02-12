<?php

namespace Thruster\Component\HttpResponse\Tests;

use Thruster\Component\HttpMessage\Response;
use Thruster\Component\HttpResponse\ResponseBuilder;

/**
 * Class ResponseBuilderTest
 *
 * @package Thruster\Component\HttpResponse\Tests
 * @author  Aurimas Niekis <aurimas@niekis.lt>
 */
class ResponseBuilderTest extends \PHPUnit_Framework_TestCase
{

    public function testWithJsonBuilder()
    {
        $response = new Response();

        $given = ['foo', 'bar'];

        $response = ResponseBuilder::init($response)->withJsonBody($given);

        $this->assertSame('application/json', $response->getHeaderLine('Content-Type'));
        $this->assertJsonStringEqualsJsonString(json_encode($given), (string) $response->getBody());
    }

    public function testWithJsonBuilderDifferentContentType()
    {
        $response = new Response();

        $contentType = 'application/vnd.thruster+json';
        $given = ['foo', 'bar'];

        $response = ResponseBuilder::init($response)->withJsonBody($given, $contentType);

        $this->assertSame($contentType, $response->getHeaderLine('Content-Type'));
    }
}
