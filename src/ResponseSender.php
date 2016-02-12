<?php

namespace Thruster\Component\HttpResponse;

use Psr\Http\Message\ResponseInterface;

/**
 * Class ResponseSender
 *
 * @package Thruster\Component\HttpResponse
 * @author  Aurimas Niekis <aurimas@niekis.lt>
 */
class ResponseSender
{
    /**
     * @var ResponseInterface
     */
    private $response;

    private function __construct(ResponseInterface $response)
    {
        $this->response = $response;
    }

    public static function send(ResponseInterface $response)
    {
        $sender = new static($response);

        $sender->sendStatus();
        $sender->sendHeaders();
        $sender->sendBody();
    }

    private function sendStatus()
    {
        header(
            'HTTP/' .
            $this->response->getProtocolVersion() . ' ' .
            $this->response->getStatusCode() . ' ' .
            $this->response->getReasonPhrase()
        );
    }

    private function sendHeaders()
    {
        foreach ($this->response->getHeaders() as $name => $values) {
            foreach ($values as $value) {
                header($name . ': ' . $value);
            }
        }
    }

    private function sendBody()
    {
        echo $this->response->getBody()->getContents();
    }
}
