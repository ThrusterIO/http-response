<?php

namespace Thruster\Component\HttpResponse;

use Psr\Http\Message\ResponseInterface;
use function Thruster\Component\HttpMessage\stream_for;

/**
 * Class ResponseBuilder
 *
 * @package Thruster\Component\HttpResponse
 * @author  Aurimas Niekis <aurimas@niekis.lt>
 */
class ResponseBuilder
{
    /**
     * @var ResponseInterface
     */
    private $response;

    private function __construct(ResponseInterface $response)
    {
        $this->response = $response;
    }

    public static function init(ResponseInterface $response) : self
    {
        return new static($response);
    }

    public function withJsonBody($data, string $contentType = 'application/json') : ResponseInterface
    {
        return $this->response
            ->withBody(stream_for(json_encode($data)))
            ->withHeader('Content-Type', $contentType);
    }
}
